<?php


namespace App\Models\Home;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

use EloquentBuilder;
use QueryBuilder;

/**
 * Class BaseUser
 * @package App\Models\Home
 *
 * @mixin QueryBuilder
 * @mixin EloquentBuilder
 */
class BaseUser extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, Notifiable, SoftDeletes;

}