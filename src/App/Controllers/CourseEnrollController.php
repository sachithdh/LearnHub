<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class CourseEnrollController
{

    public function __construct(private TemplateEngine $view) {}

    public function enrollCourse()
    {
        echo $this->view->render('course/CourseEnroll.php', [
            "title" => "Enroll"
        ]);
    }
}
