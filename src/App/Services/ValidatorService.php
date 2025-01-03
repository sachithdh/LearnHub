<?php

declare(strict_types=1);

namespace App\Services;

use Framework\Rules\{RequiredRule, EmailRule, InRule, MatchRule, MinRule, UrlRule};
use Framework\Validator;

class ValidatorService
{
    private Validator $validator;

    public function __construct()
    {
        $this->validator = new Validator();

        $this->validator->add('required', new RequiredRule());
        $this->validator->add('email', new EmailRule());
        $this->validator->add('min', new MinRule());
        $this->validator->add('in', new InRule());
        $this->validator->add('url', new UrlRule());
        $this->validator->add('match', new MatchRule());
    }

    public function validateRegister(array $formData)
    {
        $this->validator->validate($formData, [
            "first_name" => ["required"],
            "last_name" => ["required"],
            "email" => ["required", "email"],
            "date_of_birth" => ["required"],
            "password" => ["required"],
            "confirmPassword" => ["required", "match:password"],
        ]);
    }

    public function validateLogin(array $formData)
    {
        $this->validator->validate($formData, [
            "email" => ["required", "email"],
            "password" => ["required"],
        ]);
    }

    public function validateCourse(array $formData)
    {
        $this->validator->validate($formData, [
            "title" => ["required"],
            "description" => ["required"],
            "subject_id" => ["required"],
            "grade_id" => ["required"],
            "start_time" => ["required"],
            "end_time" => ["required"],
            "day" => ["required"],
            "price" => ["required"],
            "pricing_period" => ["required"],
        ]);
    }

    public function validateCourseRequest(array $formData)
    {
        $this->validator->validate($formData, [
            "requestTitle" => ["required"],
            "requestDescription" => ["required"],
            "subject_id" => ["required"],
        ]);
    }

    public function validateCourseRequestComment(array $formData)
    {
        $this->validator->validate($formData, [
            "comment" => ["required"],
        ]);
    }
}
