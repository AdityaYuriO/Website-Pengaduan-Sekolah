<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $table = 'role';

    public $fillable = ([
        'nama_role',
    ]);

    public function user() {
        return $this->hasMany(User::class);
    }
}
