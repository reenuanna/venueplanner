<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;


class userbook extends Model
{
    use HasFactory;
    public function updateData($table,$sid,$id)
      {
    DB::table($table)->where('b_id',$id)->update($sid);
    }
}