<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Rent extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function getBooknameAttribute()
    {
        $tmp=DB::table('books')
        ->select(DB::raw('title'))
        ->where('id', '=', $this->isbn)
        ->first();

        return $tmp->title;
    }

    public function getRenterAttribute()
    {
        
        $tmp=DB::table('members')
        ->select(DB::raw('name as result' ))
        ->where('id', '=', $this->user_id)
        
        ->first();
        return $tmp->result;
    }
   

}
