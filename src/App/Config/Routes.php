<?php


declare(strict_types=1);


namespace App\Config;

use App\Controllers\{HomeController, AboutController, AuthController, ProfileController, TeacherController, CoursesController, CourseInfoController, CourseEnrollController, CreateCourseController};
use App\Middleware\AuthRequiredMiddleware;
use App\Middleware\GuestOnlyMiddleware;
use Framework\App;

function registerRoutes(App $app)
{
    $app->get('/', [HomeController::class, 'home'], [AuthRequiredMiddleware::class]);
    $app->get('/about', [AboutController::class, 'about']);
    $app->get('/register', [AuthController::class, 'registerView'], [GuestOnlyMiddleware::class]);
    $app->get('/register/role', [AuthController::class, 'registerRoleView'], [GuestOnlyMiddleware::class]);

    $app->post('/register', [AuthController::class, 'register']);
    $app->get('/login', [AuthController::class, 'loginView'], [GuestOnlyMiddleware::class]);
    $app->post('/login', [AuthController::class, 'login']);
    $app->get('/logout', [AuthController::class, 'logout']);
    $app->get('/profile', [ProfileController::class, 'profile']);
    $app->get('/teacher', [TeacherController::class, 'teacher']);
    $app->get('/courses', [CoursesController::class, 'course']);
    $app->get('/course/course-info', [CourseInfoController::class, 'courseInfo']);
    $app->get('/course/enroll', [CourseEnrollController::class, 'enrollCourse']);
    $app->get('/course/create', [CreateCourseController::class, 'create']);
    // This is how paths with router params are added
    $app->get('/auth/{param1}/something/{param2}', [AuthController::class, 'testParamRoute']);
}
