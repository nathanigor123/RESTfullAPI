<?php
/**
 * Created by PhpStorm.
 * User: nathan.kamto
 * Date: 14/08/2019
 * Time: 10:59
 */

namespace App\Scopes;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class SellerScope implements Scope
{
        public function apply(Builder $builder, Model $model)
        {
            // TODO: Implement apply() method.
            $builder->has('products');
        }
}