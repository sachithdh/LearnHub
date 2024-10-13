<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class CourseInfoController
{

    public function __construct(private TemplateEngine $view) {}

    public function courseInfo()
    {
        echo $this->view->render('course/CourseInfo.php', [
            "title" => "Course"
        ]);
    }
}
