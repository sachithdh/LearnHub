<?php

declare(strict_types=1);

namespace App\Services;

use Framework\Database;

class SubjectService
{
    public  function __construct(private Database $db) {}

    public function getSubjects()
    {
        $subjects = $this->db->query(
            "SELECT * FROM subjects"
        )->findAll();

        return $subjects;
    }
}
