<?php

declare(strict_types=1);

namespace App\Services;

use Framework\Database;

class CourseRequestService
{
    public function __construct(private Database $db) {}

    public function create(array $formData)
    {
        $user_id = $_SESSION['user'];
        $this->db->query(
            "INSERT INTO course_requests(title, description, subject_id, user_id)
            VALUES (:title, :description, :subject_id, :user_id)",
            [
                "title" => $formData['requestTitle'],
                "description" => $formData['requestDescription'],
                "subject_id" => $formData['subject_id'] != -1 ? $formData['subject_id'] : null,
                "user_id" => $user_id,
            ]
        );
    }

    public function getCourseRequestsforView()
    {
        $query =
            "SELECT 
                cr.title, 
                cr.description, 
                s.subject_title AS subject, 
                cr.created_date, 
                cr.updated_date, 
                CONCAT(u.first_name, ' ', u.last_name) AS author
            FROM 
                course_requests cr
            LEFT JOIN 
                subjects s ON cr.subject_id = s.subject_id
            JOIN 
                users u ON cr.user_id = u.user_id";

        $requests = $this->db->query($query)->findAll();

        return $requests;
    }
}
