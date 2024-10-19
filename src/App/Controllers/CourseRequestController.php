<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class CourseRequestController
{

    public function __construct(private TemplateEngine $view) {}

    public function courseRequest()
    {
        echo $this->view->render('post/CourseRequest.php', [
            "title" => "Course Requiest"
        ]);
    }
}
