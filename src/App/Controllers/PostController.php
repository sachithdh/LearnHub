<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\CourseRequestService;
use App\Services\SubjectService;
use App\Services\ValidatorService;
use Exception;
use Framework\TemplateEngine;

class PostController
{

    public function __construct(
        private TemplateEngine $view,
        private SubjectService $subjectService,
        private CourseRequestService $courseRequestService,
        private ValidatorService $validatorService
    ) {}

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

    public function createCourseRequestView()
    {
        $subjects = $this->subjectService->getSubjects();
        echo $this->view->render('post/createCourseRequest.php', [
            'title' => 'Create Course Request',
            'subjects' => $subjects
        ]);
    }

    public function createCourseRequest()
    {
        $this->validatorService->validateCourseRequest($_POST);
        $this->courseRequestService->create($_POST);
        redirectTo('/course/request');
    }
}
