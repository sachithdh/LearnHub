<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class PostController
{

    public function __construct(private TemplateEngine $view) {}

    public function requestDetail()
    {
        echo $this->view->render('post/RequestDetail.php', [
            "title" => "Course Requiest"
        ]);
    }

    public function courseRequest()
    {
        echo $this->view->render('post/CourseRequest.php', [
            "title" => "Course Requiest"
        ]);
    }

    public function createPost()
    {
        echo $this->view->render('post/create_post.php', [
            'title' => 'Create Post'
        ]);
    }
}
