<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class AlertController
{
    public function __construct(private TemplateEngine $view) {}

    public function alert()
    {
        echo $this->view->render('partials/_alert.php', [
            'title' => 'Alert'
        ]);
    }
}
