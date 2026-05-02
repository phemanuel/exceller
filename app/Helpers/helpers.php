<?php

use App\Models\AdminSettings;

function setting($key, $default = null)
{
    return \App\Models\AdminSettings::where('key', $key)->value('value') ?? $default;
}