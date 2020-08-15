<?php

namespace App\Models;

use EloquentBuilder;
use QueryBuilder;
use Illuminate\Foundation\Auth\User as Authenticate;
/**
 * Class Model
 * @package App\Models
 *
 * @mixin QueryBuilder
 * @mixin EloquentBuilder
 */
class Model extends Authenticate
{

}
