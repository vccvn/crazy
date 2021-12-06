<?php

namespace App\Controllers\Traits;

trait ApiMethods{
    use CrudMethods, ApiCrud, ApiFilter;
}