<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Services\{UserService, CourseService};


class PageController
{
    public function __construct(private TemplateEngine $view, private UserService $userService, private CourseService $courseService) {}

    public function home()
    {
        echo $this->view->render('index.php', [
            "title" => "Home"
        ]);
    }

    public function about()
    {
        echo $this->view->render('about.php', [
            "title" => "About"
        ]);
    }

    public function contact()
    {
        echo $this->view->render('contact.php', [
            "title" => "contact-us"
        ]);
    }

    public function dashboard()
    {
        $myCourses = $this->courseService->getMyCourses();
        $users = $this->userService->getAllUsers();
        echo $this->view->render('User/dashboard.php', [
            "title" => "Dashboard",
            'users' => $users,
            "myCourses" => $myCourses
        ]);
    }
    public function adminDashboard()
    {
        $myCourses = $this->courseService->getMyCourses();
        $users = $this->userService->getAllUsers();
        echo $this->view->render('User/Admin/admin_dashboard.php', [
            "title" => "Admin Dashboard",
            'users' => $users,
            "myCourses" => $myCourses
        ]);
    }

    public function billingAndPayment()
    {
        echo $this->view->render('User/payment.php', [
            'title' => "Billing & Payment"
        ]);
    }
    public function userManagment()
    {
        $users = $this->userService->getAllUsers();
        echo $this->view->render('User/Admin/user_managment.php', [
            'title' => "User Managment",
            'users' => $users
        ]);
    }
    public function courseManagment()
    {
        echo $this->view->render('User/Admin/course_managment.php', [
            'title' => "Course Managment"
        ]);
    }
    public function unauthorizedAccess()
    {
        echo $this->view->render("unauthorized_access.php", [
            'title' => "Unauthorized Access"
        ]);
    }
    public function error()
    {
        echo $this->view->render("404.php", [
            'title' => "404 Error"
        ]);
    }

    public function myCourses()
    {
        echo $this->view->render(
            "User/user_courses.php",
            [
                'title' => "User Courses"
            ]
        );
    }
    public function notFound()
    {
        echo $this->view->render('notFound.php', [
            'title' => "not-Found-404"
        ]);
    }

    public function denied()
    {
        echo $this->view->render('accessDenied.php', [
            'title' => "not-Found-404"
        ]);
    }
}
