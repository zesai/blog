<?php

namespace App\Models;

use EloquentBuilder;
use QueryBuilder;
use Illuminate\Database\Eloquent\Model as EloquentModel;
/**
 * Class Model
 * @package App\Models
 *
 * @mixin QueryBuilder
 * @mixin EloquentBuilder
 */
class Model extends EloquentModel
{

}
