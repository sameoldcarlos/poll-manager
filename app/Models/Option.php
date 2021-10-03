<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table = 'options';

    protected $fillable = ['answer', 'num_votes', 'poll_id'];
}
