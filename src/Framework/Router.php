<?php

declare(strict_types=1);

namespace Framework;

class Router
{
    private array $routes = [];
    private array $middeleware = [];

    public function add(string $method, string $path, array $controller, array $routMiddleware = [])
    {
        $path = $this->normalizePath($path);

        $regexPath = preg_replace('#{[^/]+}#', '([^/]+)', $path);

        $this->routes[] = [
            'path' => $path,
            'method' => strtoupper($method),
            'controller' => $controller,
            'routeMiddleware' => $routMiddleware,
            'regexPath' => $regexPath
        ];
    }

    private function normalizePath(string $path)
    {
        $path = trim($path, '/');
        $path = "/{$path}/";
        $path = preg_replace('#[/]{2,}#', '/', $path);

        return $path;
    }

    public function dispatch(string $path, string $method, Container $container = null)
    {
        $path = $this->normalizePath($path);
        $method = strtoupper($method);

        foreach ($this->routes as $route) {
            if (
                !preg_match("#^{$route['regexPath']}$#", $path, $paramValues) ||
                $route['method'] !== $method
            ) {
                continue;
            }

            array_shift($paramValues);
            preg_match_all('#{([^/]+)}#', $route['path'], $paramKeys);
            $paramKeys = $paramKeys[1];
            $params = array_combine($paramKeys, $paramValues);

            [$class, $function] = $route['controller'];

            $controllerInstance = $container ? $container->resolve($class) : new $class;
            $action = fn() => $controllerInstance->$function($params);

            $allMiddleware = [...$route['routeMiddleware'], ...$this->middeleware];

            foreach ($allMiddleware as $middleware) {
                $middlewareInstance = $container ? $container->resolve($middleware) : new $middleware;
                $action = fn() => $middlewareInstance->process($action);
            }
            $action();

            return;
        }
    }

    public function addMiddleware(string $middleware)
    {
        $this->middeleware[] = $middleware;
    }
}
