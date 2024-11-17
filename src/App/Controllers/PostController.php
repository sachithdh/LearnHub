<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\SubjectService;
use Framework\TemplateEngine;

class PostController
{

    public function __construct(private TemplateEngine $view, private SubjectService $subjectService) {}

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

    public function createCourseRequest()
    {
        $subjects = $this->subjectService->getSubjects();
        echo $this->view->render('post/createCourseRequest.php', [
            'title' => 'Create Course Request',
            'subjects' => $subjects
        ]);
    }
}
