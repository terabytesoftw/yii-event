<?php

declare(strict_types=1);

use Yiisoft\Composer\Config\Builder;
use Yiisoft\Yii\Event\EventDispatcherProvider;

return [
    'yiisoft/event-dispatcher/eventdispatcher' => [
        '__class' => EventDispatcherProvider::class,
        '__construct()' => [Builder::require('events')]
    ],
];