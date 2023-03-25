<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Reimbesement;
use App\Model\ReimbesementDetail;
use DB;

class ReimbesementOutlet extends Model
{
    protected $table = 'reimbesement_outlets';
    protected $guarded = ['id'];

    public function reimbesement()
    {
        return $this->belongsTo(Reimbesement::class, 'reimbesement_id', 'id');
    }

    public function details()
    {
        return $this->hasMany(ReimbesementDetail::class, 'outlet_id', 'id');
    }
}
