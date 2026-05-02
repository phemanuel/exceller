<?php

use App\Models\AdminSetting;

function setting($key, $default = null)
{
    return Setting::where('key', $key)->value('value') ?? $default;
}