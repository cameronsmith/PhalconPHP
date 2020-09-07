<?php namespace CameronSmith\PhalconPHP\Helpers;

/**
 * Class Path
 *
 * @package CameronSmith\PhalconPHP\Helpers
 */
class Path
{
    /**
     * @var string
     */
    protected static $path;

    /**
     * Set global application root path.
     *
     * @param string $path
     */
    public static function setRootPath(string $path)
    {
        static::$path = $path . DIRECTORY_SEPARATOR;
    }

    /**
     * Get global application root path.
     *
     * @return string
     */
    public static function getRootPath(): string
    {
        return static::$path;
    }

    /**
     * Get global application root path.
     *
     * @return string
     */
    public static function getAppPath(): string
    {
        return static::$path . 'app/';
    }
}
