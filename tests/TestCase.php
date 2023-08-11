<?php

namespace GuyWarner\GoogleChatAlerts\Tests;

use GuyWarner\GoogleChatAlerts\GoogleChatAlertsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            GoogleChatAlertsServiceProvider::class,
        ];
    }
}
