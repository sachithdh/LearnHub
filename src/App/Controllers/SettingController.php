<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\UserService;
use Framework\TemplateEngine;

class SettingController
{

    public function __construct(private TemplateEngine $view, private UserService $userService) {}

    public function settings()
    {
        $userDetails = $this->userService->getUserProfile();
        echo $this->view->render('User/settings.php', [
            "title" => "Settings",
            "userDetails" => $userDetails
        ]);
    }
}
