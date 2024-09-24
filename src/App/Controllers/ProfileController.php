<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class ProfileController
{

    public function __construct(private TemplateEngine $view) {}

    public function profile()
    {
        echo $this->view->render('profile.php', [
            "title" => "Profile"
        ]);
    }
}
