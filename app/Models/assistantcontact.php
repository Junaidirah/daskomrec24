<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assistantcontact extends Model
{
    use HasFactory;
    protected $table = 'assistantcontact';
    protected $fillable = [
        'name',
        'photo',
        'ascod',
        'nohp',
        'instagram',
        'idline',
    ];
}