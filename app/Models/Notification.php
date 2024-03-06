<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends Model
{
    use HasFactory,SoftDeletes;
    protected $table="notification";
    protected $fillable = [
        'date',
        'message',
        'added_by',
        'edited_by',
        'active_status',
        'msg_title',
        'user_id',
        'user_type'
    ];
}
