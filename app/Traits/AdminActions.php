<?php
/**
 * Created by PhpStorm.
 * User: nathan.kamto
 * Date: 13/08/2019
 * Time: 17:42
 */

namespace App\Traits;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

trait AdminActions
{
    public function before($user, $ability){
        if($user->isAdmin()){
            return true;
        }
    }


}