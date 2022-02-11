<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Member extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function getInfosAttribute()
    {
        
        return $this->name." - ".$this->address;
    }

    
    public function getRentAttribute()
    {
        $count_db= DB::table("rents")
        ->leftJoin("members", "members.id","=","rents.user_id")
        ->select(DB::raw('count(*) as count'))
        ->where("rents.user_id","=",$this->id)
        ->where("active","=","1")
        ->first();
  
        $count = $count_db->count;

        if($this->type==1 && $count <5)
        {
            return true;
        }
        if($this->type==2)
        {
            return true;
        }
        if($this->type==3 && $count <4)
        {
            return true;
        }
        if($this->type==4 && $count <2)
        {
            return true;
        }

        return false;
    }
}
