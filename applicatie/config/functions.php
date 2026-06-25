<?php

if (!function_exists('dd')) {


    /**
     * Check a variable which it contains and stop the execution of the application.
     *
     * @param  mixed $var The value you want to debug
     * @return void
     */
    function dd(mixed $var): void
    {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
        die();
    }
}

if (!function_exists('slug')) {
    /**
     * Make of a name with spaces and capital letters a slug.
     *
     * @param  mixed $string The string to make a slug of.
     * @return string The slug
     */
    function toSlug(string $string): string
    {
        $lower = strtolower($string);
        $replaceSpaces = str_replace(' ', '-', $lower);

        return $replaceSpaces;
    }
}
