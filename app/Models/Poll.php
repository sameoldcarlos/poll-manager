<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Option;

class Poll extends Model
{
    protected $table = 'polls';

    protected $fillable = ['title', 'question', 'total_votes', 'is_active', 'user_id'];

    public function options() {
        return $this->hasMany(Option::class);
    }
    
}
