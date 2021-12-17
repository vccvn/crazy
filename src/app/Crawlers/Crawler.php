<?php

namespace Crazy\Crawlers;

use Crazy\Repositories\Files\FileRepository;
use Crazy\Repositories\Metadatas\MetadataRepository;

use Carbon\Carbon;
use Crazy\Files\Image;
use Crazy\Helpers\Arr;

class Crawler
{
    use Crawl;

    
     /**
     * chay lai thiet lap
     */
    public function __construct()
    {
        if(method_exists($this, 'init')){
            $this->init();
        }
    }

    public function __call($name, $arguments)
    {
        
    }
}