<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.09.2018
 * Time: 11:37
 */

namespace JIenpukoH\ImageResizer;


trait Resizer
{
    public function getImageUrl($src, $width, $height,$compress = true,  $quality = 85)
    {

        if (substr($src, 0, 1) !== '/') {
            $src = '/' . $src;
        }
        return (new ImageResize($src, $quality,$compress))
            ->setRootDir($this->getRootDir())
            ->getImage($width, $height);
    }

}