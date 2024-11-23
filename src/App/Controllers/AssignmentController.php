<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class AssignmentController
{
    public function __construct(private TemplateEngine $view) {}

    public function createAssignment()
    {
        echo $this->view->render("Assignment/createAssignment.php", [
            "title" => "Create Assignment"
        ]);
    }
}
