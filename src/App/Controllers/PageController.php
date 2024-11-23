<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;


class PageController
{
    public function __construct(private TemplateEngine $view) {}

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
        echo $this->view->render('User/dashboard.php', [
            "title" => "Dashboard"
        ]);
    }
    public function adminDashboard()
    {
        echo $this->view->render('User/Admin/admin_dashboard.php', [
            "title" => "Admin Dashboard"
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
        echo $this->view->render('User/Admin/user_managment.php', [
            'title' => "User Managment"
        ]);
    }
    public function courseManagment()
    {
        echo $this->view->render('User/Admin/course_managment.php', [
            'title' => "Course Managment"
        ]);
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
