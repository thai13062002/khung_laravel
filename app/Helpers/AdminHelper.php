<?php

namespace App\Helpers;

class AdminHelper
{
    /**
     *  Get page title
     *
     * @param null $title
     * @return string|null
     */
    public static function getPageTitle($title = null): ?string
    {
        if (!$title) {
            return config('app.name');
        }//end if

        return $title . ' - ' . config('app.name');
    }

    /**
     * Get admin sidebar
     *
     * @return array
     */
    public static function getAdminSidebar(): array
    {
        return [
            [
                'label' => trans('admin.sidebar.dashboard'),
                'icon' => 'bx-home-circle',
                'route' => 'dashboard',
            ],
            [
                'label' => trans('admin.sidebar.banner'),
                'icon' => 'bx-rocket',
                'items' => [
                    [
                        'label' => trans('admin.action.list'),
                        'route' => 'banners.index',
                    ],
                    [
                        'label' => trans('admin.action.create'),
                        'route' => 'banners.create',
                    ],
                ],
            ],
        ];
    }
}
