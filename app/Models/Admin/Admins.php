<?php

namespace App\Models\Admin;

use App\Models\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

/**
 * Class Admins
 * @property int id
 * @property string username
 * @property string name
 * @property string password
 * @property string remember_token
 * @property string avatar
 * @package App\Models\Admin
 * @author zesai
 * @date 2020/8/4
 */
class Admins extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $fillable = [
        'username', 'name', 'password', 'remember_token', 'avatar'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
