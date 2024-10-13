<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class Course
{

    public function __construct(private TemplateEngine $view) {}

    public function course()
    {
        echo $this->view->render('course/SearchCourse.php', [
            "title" => "Search Course"
        ]);
    }
}
