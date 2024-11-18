<?php


declare(strict_types=1);


namespace App\Config;

use App\Controllers\{AlertController, AssignmentController, AuthController, ProfileController, CoursesController, TutorProfileController, SettingController, PageController, ResourceController, PostController, ReviewController};
use App\Middleware\AuthRequiredMiddleware;
use App\Middleware\GuestOnlyMiddleware;
use Framework\App;

function registerRoutes(App $app)
{
    $app->get('/', [PageController::class, 'home'], [AuthRequiredMiddleware::class]);
    $app->get('/about', [PageController::class, 'about']);
    $app->get('/profile', [ProfileController::class, 'profile']);
    $app->get('/dashboard', [PageController::class, 'dashboard']);
    $app->get('/admin-dashboard', [PageController::class, 'adminDashboard']);
    $app->get('/admin-dashboard/user-managment', [PageController::class, 'userManagment']);
    $app->get('/admin-dashboard/course-managment', [PageController::class, 'courseManagment']);
    $app->get('/settings', [SettingController::class, 'settings']);
    $app->get('/tutor', [TutorProfileController::class, 'tutorProfile']);
    $app->get('/alert', [AlertController::class, 'alert']);

    // User
    $app->post('/register/create-account', [AuthController::class, 'registerView'], [GuestOnlyMiddleware::class]);
    $app->get('/register', [AuthController::class, 'registerRoleView'], [GuestOnlyMiddleware::class]);
    $app->post('/register', [AuthController::class, 'register']);
    $app->get('/login', [AuthController::class, 'loginView'], [GuestOnlyMiddleware::class]);
    $app->post('/login', [AuthController::class, 'login']);
    $app->get('/logout', [AuthController::class, 'logout']);
    $app->get('/billing-and-payment', [PageController::class, 'billingAndPayment']);

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

    // Reviews
    $app->post('/add-review', [ReviewController::class, 'addReview']);
    $app->get('/review/edit/{review}', [ReviewController::class, 'editView']);
    $app->post('/review/edit/{review}', [ReviewController::class, 'edit']);
    $app->delete('/review/delete/{review}', [ReviewController::class, 'deleteReview']);

    // Assignments
    $app->get('/course/{courseId}/assignment/create', [AssignmentController::class, 'createAssignment']);

    // This is how paths with router params are added
    $app->get('/auth/{param1}/something/{param2}', [AuthController::class, 'testParamRoute']);
}
