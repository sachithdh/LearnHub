<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class MyCoursesController
{

    public function __construct(private TemplateEngine $view) {}

    public function myCourses()
    {
        echo $this->view->render('User/my_courses.php', [
            "title" => "My Courses"
        ]);
    }
}
