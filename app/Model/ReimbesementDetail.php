<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Reimbesement;
use App\Model\ReimbesementOutlet;

class ReimbesementDetail extends Model
{
    protected $table = 'reimbesement_details';
    protected $guarded = ['id'];

    public function outlet()
    {
        return $this->belongsTo(ReimbesementOutlet::class, 'outlet_id', 'id');
    }
}
