<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class DashboardController
{

    public function __construct(private TemplateEngine $view) {}

    public function dashboard()
    {
        echo $this->view->render('User/dashboard.php', [
            "title" => "Dashboard"
        ]);
    }
}
