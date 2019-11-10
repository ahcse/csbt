<?php

namespace App\Models\ClientInformation;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    protected $table = 'projects';
    use SoftDeletes;

    public function client()
    {
    	return  $this->belongsTo('App\Models\ClientInformation\Client');
    }
}
