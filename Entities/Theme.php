<?php

namespace Modules\ThemeMidone\Entities;


use Modules\BaseCore\Contracts\Services\ThemeContract;

class Theme implements ThemeContract
{

    public function getName(): string
    {
        return 'Midone';
    }

    public function getPath(): string
    {
        return module_path('ThemeMidone') .  '/Resources/views';
    }
}
