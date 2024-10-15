<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\UserService;
use Framework\TemplateEngine;

class ProfileController
{

    public function __construct(private TemplateEngine $view, private UserService $userService) {}

    public function profile()
    {
        $userDetails = $this->userService->getUserProfile();
        echo $this->view->render('profile.php', [
            "title" => "Profile",
            "userDetails" => $userDetails
        ]);
    }
}
