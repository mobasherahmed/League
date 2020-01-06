<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'team';
    public $timestamps = false;

    public function league()
    {
        return $this->belongsTo('App\Models\League');
    }
}
