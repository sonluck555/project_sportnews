<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Products extends Model
{
    public static function getnews(){
        return DB::table('news')->get();
    }
    public static function add_pro($data){
        //dd('2');
        return DB::table('news')->insert($data);
    }
    public static function getpro(){
        return DB::table('news')->get();
    }
    public static function getnews_byid($id){
        return DB::table('news')
        ->where('id',$id)
        ->first();
    }
    public static function update_pro($data,$id){
        //dd('2');
        return DB::table('news')
        ->where('id',$id)
        ->update($data);
    }
    public static function news_delete($id){
        //dd('2');
        return DB::table('news')
        ->where('id',$id)
        ->delete();
    }
}
