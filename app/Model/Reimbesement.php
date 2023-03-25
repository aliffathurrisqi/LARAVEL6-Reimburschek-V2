<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\ReimbesementDetail;
use App\Model\ReimbesementOutlet;
use DB;

class Reimbesement extends Model
{
    protected $table = 'reimbesements';
    protected $casts = ['reimbesement_date'=>'datetime'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['from'] ?? false, function ($query, $from) {
            return $query->where('reimbesement_date', '>=', $from);
        });

        $query->when($filters['to'] ?? false, function ($query, $to) {
            return $query->where('reimbesement_date', '<=', $to);
        });
    }

    public function outlets(){
        return $this->hasMany(ReimbesementOutlet::class,'reimbesement_id', 'id');
    }

    public function outlet_details(){
        return ReimbesementOutlet::with(['reimbesement','details'])->where('deleted_at', NULL)->where('reimbesement_id',$this->id)->get();;
    }

    public function detail_total(){
        $outlet = ReimbesementOutlet::with(['reimbesement','details'])->where('deleted_at', NULL)->where('reimbesement_id',$this->id)->get();;

        $i = 0;

        foreach($outlet as $item){
            $i += $item->details->count();
        }

        return $i;
    }

}
