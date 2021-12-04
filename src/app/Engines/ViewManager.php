<?php
namespace Crazy\Engines;

use Crazy\Repositories\Html\AreaRepository;
use Crazy\Web\HtmlAreaList;
use Crazy\Web\Options;
use Crazy\Files\Filemanager;
use Crazy\Helpers\Arr;

class ViewManager
{
    static $shared = false;

    static $themeFolder = '';
    public static function share($name = null, $value=null)
    {
        if(static::$shared) return true;
        $a = $name?(is_array($name)?$name:(is_string($name)?[$name=>$value]: [])):[];
        view()->share($a);
        return true;
    }
    
}
