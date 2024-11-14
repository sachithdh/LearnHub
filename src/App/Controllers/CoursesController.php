<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Services\{ValidatorService, CourseService};

class CoursesController
{

    public function __construct(
        private TemplateEngine $view,
        private ValidatorService $validatorService,
        private CourseService $courseService
    ) {}

    public function course()
    {
        echo $this->view->render('course/Courses.php', [
            "title" => "Search Course"
        ]);
    }

    public function enrollCourse()
    {
        echo $this->view->render('course/CourseEnroll.php', [
            "title" => "Enroll"
        ]);
    }

    public function courseInfo()
    {
        echo $this->view->render('course/CourseInfo.php', [
            "title" => "Course"
        ]);
    }

    public function createCourseView()
    {
        echo $this->view->render('course/CreateCourse.php', [
            "title" => "Create Course"
        ]);
    }

    public function createCourse()
    {
        $this->validatorService->validateCourse($_POST);
        $this->courseService->create($_POST);
        redirectTo('/courses/my');
    }

    public function myCourses()
    {
        $myCourses = $this->courseService->getMyCourses();
        echo $this->view->render('User/my_courses.php', [
            "title" => "My Courses",
            "myCourses" => $myCourses
        ]);
    }

    public function courseEditView(array $params)
    {
        $course = $this->courseService->getCourse($params['course']);

        if (!$course) {
            redirectTo('/courses/my');
        }

        echo $this->view->render(
            'course/edit_course.php',
            [
                'course' => $course,
                'title' => "Edit Course"
            ]
        );
    }
    public function editCourse(array $params)
    {
        $course = $this->courseService->getCourse($params['course']);

        if (!$course) {
            redirectTo('/courses/my');
        }
        $this->validatorService->validateCourse($_POST);
        $this->courseService->update($_POST, $params['id']);
        redirectTo($_SERVER['HTTP_REFERER']);
    }
}
