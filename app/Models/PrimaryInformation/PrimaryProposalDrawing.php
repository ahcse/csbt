<?php

namespace App\Models\PrimaryInformation;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class PrimaryProposalDrawing extends Model
{
    protected $table = 'primary_proposal_drawings';
    use SoftDeletes;

    public function project()
    {
    	return  $this->belongsTo('\App\Models\ClientInformation\Project');
    }

    public function getCreatedAtAttribute($value)
    {
        return  Carbon::parse($this->attributes['created_at'])->toDateString();
    }
}
