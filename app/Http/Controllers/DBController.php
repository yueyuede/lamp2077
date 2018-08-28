<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class DBController extends Controller
{
    //查询
    public function select()
    {
    	$news = DB::select('select * from news limit 10');
    	dd($news);
    }


    public function trans()
    {
    	// test();
    	DB::transaction(function(){
    		$res1 = DB::update('update money set account = account -100 where id = 1');

    		$res2 = DB::update('update money set account = account +100 where id = 2');

    		// if($res1 && $res2){
    		// 	DB::commit();
    		// }else{
    		// 	DB::rollback();
    		// }
    	});

    	return view('page1');
    }



    //join
    public function join()
    {
        $res = DB::table('goods_1')
            ->join('cates','goods_1.cate_id','=','cates.id')
            ->skip(0)
            ->take(10)
            ->get();

            dd($res);
    }


}
