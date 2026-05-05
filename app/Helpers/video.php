<?php

if (!function_exists('convertToEmbed')) {

    function convertToEmbed($url)
    {
        // YouTube watch URL → embed URL
        if (str_contains($url, 'youtu.be')) {
            $videoId = trim(str_replace('https://youtu.be/', '', $url));
            return "https://www.youtube.com/embed/" . $videoId;
        }

        if (str_contains($url, 'youtube.com/watch')) {
            parse_str(parse_url($url, PHP_URL_QUERY), $query);
            $videoId = $query['v'] ?? null;

            if ($videoId) {
                return "https://www.youtube.com/embed/" . $videoId;
            }
        }

        return $url;
    }
}