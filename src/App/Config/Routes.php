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
    $app->get('/contact', [PageController::class, 'contact']);
    $app->get('/about', [PageController::class, 'about']);
    $app->get('/profile', [ProfileController::class, 'profile']);
    $app->get('/dashboard', [PageController::class, 'dashboard']);
    $app->get('/admin-dashboard', [PageController::class, 'adminDashboard']);
    $app->get('/admin-dashboard/user-managment', [PageController::class, 'userManagment']);
    $app->get('/admin-dashboard/course-managment', [PageController::class, 'courseManagment']);
    $app->get('/settings', [PageController::class, 'settings']);
    $app->get('/tutor', [TutorProfileController::class, 'tutorProfile']);
    $app->get('/alert', [AlertController::class, 'alert']);
    $app->get('/error', [PageController::class, 'error']);
    $app->get('/unauthorized-access', [PageController::class, 'unauthorizedAccess']);

    $app->get('/denied', [PageController::class, 'denied']);

    // User
    $app->post('/choose-role', [AuthController::class, 'chooseRole'], [GuestOnlyMiddleware::class]);
    $app->get('/register/create-account', [AuthController::class, 'registerView'], [GuestOnlyMiddleware::class]);
    $app->get('/register', [AuthController::class, 'registerRoleView'], [GuestOnlyMiddleware::class]);
    $app->post('/register', [AuthController::class, 'register']);
    $app->get('/interest', [PageController::class, 'interest'], [AuthRequiredMiddleware::class]);
    $app->get('/interest/skip', [PageController::class, 'interestSkip'], [AuthRequiredMiddleware::class]);
    $app->get('/interest/continue', [PageController::class, 'interestContinue'], [AuthRequiredMiddleware::class]);

    $app->get('/login', [AuthController::class, 'loginView'], [GuestOnlyMiddleware::class]);
    $app->post('/login', [AuthController::class, 'login']);
    $app->get('/logout', [AuthController::class, 'logout']);
    $app->get('/billing-and-payment', [PageController::class, 'billingAndPayment']);
    $app->get('/mycourses', [PageController::class, 'myCourses']);

    $app->get('/create-ad', [PageController::class, 'createAd']);

    // Courses
    $app->get('/courses', [CoursesController::class, 'course']);
    $app->get('/manage-course/edit/{course}', [CoursesController::class, 'courseEditView']);
    $app->post('/manage-course/edit/{course}', [CoursesController::class, 'editCourse']);
    $app->delete('/manage-course/delete/{course}', [CoursesController::class, 'deleteCourse']);
    $app->get('/courses/my-courses/{course_id}', [CoursesController::class, 'courseInfo']);
    $app->get('/courses/my-courses/{course_id}/participant', [CoursesController::class, 'courseParticipant']);
    $app->get('/courses/my-courses/{course_id}/participant/stats/{participant_id}', [CoursesController::class, 'courseParticipantStat']);
    $app->get('/course/enroll', [CoursesController::class, 'enrollCourse']);
    $app->get('/course/create', [CoursesController::class, 'createCourseView']);
    $app->post('/create-course', [CoursesController::class, 'createCourse']);
    $app->get('/courses/my-courses', [CoursesController::class, 'myCourses']);

    // Course Requests
    $app->get('/course/request', [PostController::class, 'courseRequest']);
    $app->get('/course/request/create', [PostController::class, 'createCourseRequestView']);
    $app->get('/course/request/{id}', [PostController::class, 'requestDetails']);
    $app->post('/course/request/create', [PostController::class, 'createCourseRequest']);
    $app->post('/course/request/{id}/comments/create', [PostController::class, 'createComment']);
    $app->delete('/course/request/{id}', [PostController::class, 'deleteCourseRequest']);

    // Resources
    $app->get('/resource', [ResourceController::class, 'resource']);

    // Reviews
    $app->post('/add-review', [ReviewController::class, 'addReview']);
    $app->get('/review/edit/{review}', [ReviewController::class, 'editView']);
    $app->post('/review/edit/{review}', [ReviewController::class, 'edit']);
    $app->delete('/review/delete/{review}', [ReviewController::class, 'deleteReview']);

    // Assignments
    $app->get('/course/{courseId}/assignment/create', [AssignmentController::class, 'createAssignment']);

    // Catch-all route for 404 page
    $app->get('/{any:.*}', [PageController::class, 'notFound']);
}
