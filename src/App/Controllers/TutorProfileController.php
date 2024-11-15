<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\UserService;
use Framework\TemplateEngine;

class TutorProfileController
{
    public function __construct(private TemplateEngine $view, private UserService $userService) {}
    public function tutorProfile()
    {
        $userDetails = $this->userService->getUserProfile();
        echo $this->view->render('Tutor/profile.php', [
            "title" => "Tutor",
            "userDetails" => $userDetails
        ]);
    }
}
