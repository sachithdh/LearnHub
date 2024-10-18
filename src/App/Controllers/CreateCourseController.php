<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class CreateCourseController
{

    public function __construct(private TemplateEngine $view) {}

    public function create()
    {
        echo $this->view->render('course/CreateCourse.php', [
            "title" => "Create Course"
        ]);
    }
}
