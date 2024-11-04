<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class TeacherController
{

    public function __construct(private TemplateEngine $view) {}

    public function teacher()
    {
        echo $this->view->render('User/TeacherDashboard.php', [
            "title" => "Teacher"
        ]);
    }
}
