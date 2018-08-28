<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function set()
    {
        // setcookie('name','peishi', time() + 3600, '/');
        // \Cookie::queue('name','peishi', 10);   
        
        $name = \Cookie::get('name');

        dd($name);
    }


    //flash写入闪存
    public function flash()
    {
        //第一种方式
        // \Session::flash('info','添加成功');

        //第二种方式 redirect是一个函数，返回的结果是一个对象
        return redirect('/get-flash')->with('info','添加成功');

    }


    //读取闪存
    public function getFlash()
    {
        // echo \Session::get('info');
        return view('admin');
    }




    public function user()
    {
        return view('user');   
    }



    public function insert() 
    {
        // echo 'OK';
        //表单验证
        if(empty($_POST['username']) || strlen($_POST['username']) < 6 || strlen($_POST['username']) > 20) {
            \Session::flash('error','用户名格式不正确');
            return back()->withInput();
        }
    }


    //响应
    public function response()
    {
        //普通字符串
        // return 'a b c d ';
        // return '<span>aaa</span>';
        
        //返回json
        // return response()->json(['name'=>'peishi','age'=>22]);
        
        //返回一个模板
        // return view('view');

        //下载
        return response()->download('../readme.md');
    }


    //视图
    public function views()
    {
        return view('user.add',[
            'title' => '视图',
            'content' => 'aaa',
            'pages' => '<a href="">1</a><a href="">2<a>'

        ]);
    }

    //创建页面1
    public function page1()
    {
        return view('page1');
    }


     //创建页面2
    public function page2()
    {
        return view('page2');
    }


    
    //
    public function control()
    {
        return view('control',['isVip' => false]);
    }


}
