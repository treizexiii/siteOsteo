<?php

class Fonction
{
    public static function activeLink($title, $activeLink): string
    {
        $active = "";
        $link = explode('/', $activeLink);
        if ($link[1] === $title)
        {
            $active = " active";
        }
        return $active;
    }

    public static function asset(string $ressource)
    {
        $filePath = __DIR__ . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR;
        return $filePath . $ressource;
    }
}