<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function getAvailableAttribute()
    {
        $tmp=DB::table('rents')
        ->select(DB::raw('count(*) as eredmeny'))
        ->where('isbn', '=', $this->id)
        ->where('active', '=', 1)
        ->first();
        return $this->storage-$tmp->eredmeny;
    }
    public function getInfosAttribute()
    {
        return $this->title . " - " . $this->author . " - " .$this->id;
    }

    public function getRentedcountAttribute()
    {
        $count_db= DB::table("rents")
        ->leftJoin("members", "members.id","=","rents.user_id")
        ->select(DB::raw('count(*) as count'))
        ->where("rents.isbn","=",$this->id)
        ->where("active","=","1")
        ->first();

        return $count_db->count;
    }
}
