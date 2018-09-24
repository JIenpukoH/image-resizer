<?php namespace JIenpukoH\ImageResizer\Interfaces;
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.09.2018
 * Time: 14:38
 */

interface Resizable
{
    /**
     * @return mixed
     * Should return path to folder where index.php located
     * Example: public_path() in Laravel
     */
    public function getRootDir();
}