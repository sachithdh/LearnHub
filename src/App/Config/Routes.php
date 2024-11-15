<?php


declare(strict_types=1);


namespace App\Config;

use App\Controllers\{HomeController, AboutController, AlertController, AssignmentController, AuthController, ProfileController, DashboardController, CoursesController,  CreateCourseController, TutorProfileController, SettingController, MyCoursesController, ResourceController, PostController};
use App\Middleware\AuthRequiredMiddleware;
use App\Middleware\GuestOnlyMiddleware;
use Framework\App;

function registerRoutes(App $app)
{
    $app->get('/', [HomeController::class, 'home'], [AuthRequiredMiddleware::class]);
    $app->get('/about', [AboutController::class, 'about']);
    $app->get('/profile', [ProfileController::class, 'profile']);
    $app->get('/dashboard', [DashboardController::class, 'dashboard']);
    $app->get('/settings', [SettingController::class, 'settings']);
    $app->get('/tutor', [TutorProfileController::class, 'tutorProfile']);
    $app->get('/alert', [AlertController::class, 'alert']);

    // User
    $app->get('/register', [AuthController::class, 'registerView'], [GuestOnlyMiddleware::class]);
    $app->get('/register/role', [AuthController::class, 'registerRoleView'], [GuestOnlyMiddleware::class]);
    $app->post('/register', [AuthController::class, 'register']);
    $app->get('/login', [AuthController::class, 'loginView'], [GuestOnlyMiddleware::class]);
    $app->post('/login', [AuthController::class, 'login']);
    $app->get('/logout', [AuthController::class, 'logout']);

    // Courses
    $app->get('/courses', [CoursesController::class, 'course']);
    $app->get('/manage-course/edit/{course}', [CoursesController::class, 'courseEditView']);
    $app->post('/manage-course/edit/{course}', [CoursesController::class, 'editCourse']);
    $app->delete('/manage-course/delete/{course}', [CoursesController::class, 'deleteCourse']);
    $app->get('/course/course-info', [CoursesController::class, 'courseInfo']);
    $app->get('/course/enroll', [CoursesController::class, 'enrollCourse']);
    $app->get('/course/create', [CoursesController::class, 'createCourseView']);
    $app->post('/create-course', [CoursesController::class, 'createCourse']);
    $app->get('/courses/my', [CoursesController::class, 'myCourses']);

    // Post
    $app->get('/course/request', [PostController::class, 'courseRequest']);
    $app->get('/course/request/id', [PostController::class, 'requestDetail']);
    $app->get('/post/create', [PostController::class, 'createPost']);

    // Resources
    $app->get('/resource', [ResourceController::class, 'resource']);

    // Assignments
    $app->get('/course/{courseId}/assignmnet/create', [AssignmentController::class, 'createAssignment']);

    // This is how paths with router params are added
    $app->get('/auth/{param1}/something/{param2}', [AuthController::class, 'testParamRoute']);
}
