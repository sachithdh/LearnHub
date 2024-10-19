<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class CourseReqPostController
{

    public function __construct(private TemplateEngine $view) {}

    public function requestDetail()
    {
        echo $this->view->render('post/RequestDetail.php', [
            "title" => "Course Requiest"
        ]);
    }
}
