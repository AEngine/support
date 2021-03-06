<?php

use AEngine\Support\Crypta;
use AEngine\Support\Form;
use AEngine\Support\Str;

if (!function_exists('pre')) {
    /**
     * Function wrapper around var_dump for debugging
     *
     * @param mixed ...$args
     */
    function pre(...$args)
    {
        echo '<pre>';
        foreach ($args as $obj) {
            var_dump($obj);
        }
        echo '</pre>';
    }
}

if (!function_exists('str_after')) {
    /**
     * Return the remainder of a string after a given value.
     *
     * @param string $subject
     * @param string $search
     *
     * @return string
     */
    function str_after($subject, $search)
    {
        return Str::after($subject, $search);
    }
}

if (!function_exists('str_before')) {
    /**
     * Get the portion of a string before a given value.
     *
     * @param string $subject
     * @param string $search
     *
     * @return string
     */
    function str_before($subject, $search)
    {
        return Str::before($subject, $search);
    }
}

if (!function_exists('str_contains')) {
    /**
     * Determine if a given string contains a given substring.
     *
     * @param string       $haystack
     * @param string|array $needles
     *
     * @return bool
     */
    function str_contains($haystack, $needles)
    {
        return Str::contains($haystack, $needles);
    }
}

if (!function_exists('str_starts_with')) {
    /**
     * Determine if a given string starts with a given substring.
     *
     * @param string|array $needles
     * @param string       $haystack
     *
     * @return bool
     */
    function str_starts_with($needles, $haystack)
    {
        return Str::start($needles, $haystack);
    }
}

if (!function_exists('str_ends_with')) {
    /**
     * Determine if a given string ends with a given substring.
     *
     * @param string|array $needles
     * @param string       $haystack
     *
     * @return bool
     */
    function str_ends_with($needles, $haystack)
    {
        return Str::end($needles, $haystack);
    }
}

if (!function_exists('str_truncate')) {
    /**
     * Limit the number of characters in a string.
     *
     * @param string $value
     * @param int    $limit
     * @param string $end
     *
     * @return string
     */
    function str_truncate($value, $limit = 100, $end = '...')
    {
        return Str::truncate($value, $limit, $end);
    }
}

if (!function_exists('str_eos')) {
    /**
     * Slope of the word, depending on the number
     *
     * @param int    $count
     * @param string $one
     * @param string $two
     * @param string $five
     *
     * @return string
     */
    function str_eos($count, $one, $two, $five)
    {
        return Str::eos($count, $one, $two, $five);
    }
}

if (!function_exists('str_title_case')) {
    /**
     * Convert a value to title case.
     *
     * @param string $value
     *
     * @return string
     */
    function str_title_case($value)
    {
        return Str::title($value);
    }
}

if (!function_exists('str_escape')) {
    /**
     * Escape a string or an array of strings
     *
     * @param string|array $input
     *
     * @return string;
     */
    function str_escape($input)
    {
        return Str::escape($input);
    }
}

if (!function_exists('str_un_escape')) {
    /**
     * Remove the screening in a row or an array of strings
     *
     * @param string|array $input
     *
     * @return string;
     */
    function str_un_escape($input)
    {
        return Str::unEscape($input);
    }
}

if (!function_exists('str_convert_size')) {
    /**
     * Returns a string representation of the data size
     *
     * @param int $size
     *
     * @return string
     */
    function str_convert_size($size)
    {
        return Str::convertSize($size);
    }
}

if (!function_exists('form')) {
    /**
     * Generate HTML5 form
     *
     * @param string $type
     * @param string $name
     * @param array  $args
     *
     * @return string
     */
    function form($type, $name, $args = [])
    {
        return Form::__callStatic($type, [$name, $args]);
    }
}

if (!function_exists('crypta_encrypt')) {
    /**
     * Encrypt transmitted string
     *
     * @param string $input
     * @param string $secret
     *
     * @return string
     */
    function crypta_encrypt($input, $secret = '')
    {
        return Crypta::encrypt($input, $secret);
    }
}

if (!function_exists('crypta_decrypt')) {
    /**
     * Decrypt passed string
     *
     * @param string $input
     * @param string $secret
     *
     * @return string
     */
    function crypta_decrypt($input, $secret = '')
    {
        return Crypta::decrypt($input, $secret);
    }
}

if (!function_exists('crypta_hash')) {
    /**
     * Generate hash sum for a row
     *
     * @param string $string
     * @param string $secret
     *
     * @return string
     */
    function crypta_hash($string, $secret = '')
    {
        return Crypta::hash($string, $secret);
    }
}

if (!function_exists('crypta_hash_check')) {
    /**
     * Check string against the hash sum
     *
     * @param string $string
     * @param string $hashString
     *
     * @return bool
     */
    function crypta_hash_check($string, $hashString)
    {
        return Crypta::check($string, $hashString);
    }
}
