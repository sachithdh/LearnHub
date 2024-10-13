<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\{ValidatorService, UserService};
use Framework\TemplateEngine;

class AuthController
{
    public function __construct(
        private TemplateEngine $view,
        private ValidatorService $validatorService,
        private UserService $userService,
    ) {}

    public function registerView()
    {
        echo $this->view->render("register.php", [
            "title" => "Register"
        ]);
    }
    public function registerRoleView()
    {
        echo $this->view->render("choose_role.php", [
            "title" => "RegisterRole"
        ]);
    }

    public function register()
    {
        $this->validatorService->validateRegister($_POST);
        $this->userService->isEmailTaken($_POST['email']);
        $this->userService->create($_POST);
        redirectTo('/');
    }

    public function loginView()
    {
        echo $this->view->render("login.php", [
            "title" => "Login"
        ]);
    }

    public function login()
    {
        $this->validatorService->validateLogin($_POST);
        $this->userService->login($_POST);
        redirectTo('/');
    }

    public function logout()
    {
        $this->userService->logout();
        redirectTo('/login');
    }

    // TODO: Remove this method later along with the route
    public function testParamRoute(array $params)
    {
        dd($params);
    }
}
