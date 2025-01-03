<?php

declare(strict_types=1);

namespace Framework;

class App
{
    private Router $router;
    private Container $container;

    public function __construct(string $containerDefenitionsPath = null)
    {
        $this->router = new Router();
        $this->container = new Container();

        if ($containerDefenitionsPath) {
            $containerDefinitions = include $containerDefenitionsPath;

            $this->container->addDefinitions($containerDefinitions);
        }
    }

    public function run()
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        $this->router->dispatch($path, $method, $this->container);
    }

    public function get(string $path, array $controller, array $routeMiddleware = [])
    {
        $this->router->add('GET', $path, $controller, $routeMiddleware);
    }

    public function post(string $path, array $controller, array $routeMiddleware = [])
    {
        $this->router->add('post', $path, $controller, $routeMiddleware);
    }

    public function put(string $path, array $controller, array $routeMiddleware = [])
    {
        $this->router->add('PUT', $path, $controller, $routeMiddleware);
    }

    public function delete(string $path, array $controller, array $routeMiddleware = [])
    {
        $this->router->add('DELETE', $path, $controller, $routeMiddleware);
    }

    public function addMiddleware(string $middleware)
    {
        $this->router->addMiddleware($middleware);
    }
}
