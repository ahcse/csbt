<?php

namespace App\Models\PrimaryInformation;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class PrimaryQuotation extends Model
{
    protected $table = 'primary_quotations';
    use SoftDeletes;

    public function project()
    {
    	return  $this->belongsTo('\App\Models\ClientInformation\Project');
    }
}
