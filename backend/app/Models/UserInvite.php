<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInvite extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];

    public function usedBy()
    {
        return $this->hasOne('App\Models\User');
    }
}
