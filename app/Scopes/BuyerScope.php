<?php
/**
 * Created by PhpStorm.
 * User: nathan.kamto
 * Date: 14/08/2019
 * Time: 10:37
 */

namespace App\Scopes;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class BuyerScope implements Scope
{
        public function apply(Builder $builder, Model $model)
        {
            // TODO: Implement apply() method.

            $builder->has('transactions');
        }
}