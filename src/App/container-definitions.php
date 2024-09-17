<?php

declare(strict_types=1);

use App\Config\{AppConstants, Paths};
use App\Services\{UserService, ValidatorService,};
use Framework\{Container, Database, TemplateEngine};

return [
    TemplateEngine::class => fn() => new TemplateEngine(Paths::VIEW),
    ValidatorService::class => fn() => new ValidatorService(),
    Database::class => fn() => new Database(AppConstants::DB_DRIVER, [
        'host' => AppConstants::DB_HOST,
        'port' => AppConstants::DB_PORT,
        'dbname' => AppConstants::DB_NAME,
    ], AppConstants::DB_USER, AppConstants::DB_PASS),
    UserService::class => function (Container $container) {
        // return $container->resolve(UserService::class);
        $db = $container->get(Database::class);
        return new UserService($db);
    }
];
