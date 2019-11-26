<?php

namespace App\Http\Controllers;
use App\Products as product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

class ProductsController extends Controller
{
    public function getform(){
        $news = product::getnews();
        $data=array('news'=>$news);
        return view('form_add',$data);
    }
    public function postform(Request $datain){
        
        $name = $datain->input('name');
        $detail = $datain->input('detail');
        $file = Input::file('img');
        //dd($file);
        $file->move(public_path().'/',$file->getClientOriginalName());
        $img=$file->getClientOriginalName();
        $dataout = array('name'=>$name,'detail'=>$detail,'img'=>$img);
        //dd($dataout);
        //return DB::table('product')->insert($data);
        $add = product::add_pro($dataout);
        if($add>0){
            return back()->with('status', trans("1"));
        }
    }
    public function shownews(){
        $news = product::getpro();
        $data=array('news'=>$news);
        //dd($data);
        return view('show',$data);
    }
    public function prolist(){
        $product = product::getpro();
        $data=array('product'=>$product);
        return view('prolist',$data);
    }
    public function getedit($id){
        $news = product::getnews_byid($id);
        $data=array('news'=>$news);
        return view('edit',$data);
    }
    public function updateform(Request $datain){
        $id=$datain->input('id');
        $name = $datain->input('name');
        $detail = $datain->input('detail');
        $file = Input::file('img');
        //dd($file);
        if($file!=null){
            //dd($file);
            $file->move(public_path().'/',$file->getClientOriginalName());
            $img=$file->getClientOriginalName();
            $dataout = array('name'=>$name,'detail'=>$detail,'img'=>$img);
        }else{
            $dataout = array('name'=>$name,'detail'=>$detail);
        }
        
        
        //dd($dataout);
        //return DB::table('product')->insert($data);
        $add = product::update_pro($dataout,$id);
        if($add>0){
            return back()->with('status', trans("1"));
        }
    }
    public function delete_news($id){
        $delete = product::news_delete($id);
        return redirect('/add_news');
    }
}
