<?php

/*
 * This file is part of ibrand/laravel-scheduling.
 *
 * (c) iBrand <https://www.ibrand.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace iBrand\Scheduling\Schedule;

/**
 * Class ServiceProvider
 * @package iBrand\Scheduling\Schedule
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * register
     */
    public function register()
    {
        $this->app->singleton(ScheduleList::class, function ($app) {
            return new ScheduleList();
        });

        $this->app->singleton(ScheduleHandle::class, function ($app) {
            return new ScheduleHandle($app);
        });
    }
}
