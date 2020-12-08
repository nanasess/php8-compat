<?php

if (!function_exists('each'))
{
    /**
     * php8-compatibility of each function.
     *
     * @see https://www.php.net/each
     * @param array
     * @return array
     */
    function each(&$arr)
    {
        $key = key($arr);
        $value = current($arr);
        $result = $key === null ? false : array($key, $value, 'key' => $key, 'value' => $value);
        next($arr);

        return $result;
    }
}
