<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;


class ResourceController
{
    public function __construct(private TemplateEngine $view) {}

    public function resource()
    {
        echo $this->view->render('Resource/resource.php', [
            'title' => 'Resource'
        ]);
    }
}
