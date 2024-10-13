<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class CoursesController
{

    public function __construct(private TemplateEngine $view) {}

    public function course()
    {
        echo $this->view->render('course/Courses.php', [
            "title" => "Search Course"
        ]);
    }
}
