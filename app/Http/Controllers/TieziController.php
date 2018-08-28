<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TieziController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return '帖子的列表';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // echo '帖子的添加';
        return view('tiezi/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return '这里是数据插入操作';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
         return '帖子的详情id为'.$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // echo '帖子的修改页面id为'.$id;
        // return view('tiezi/edit');
        return view('tiezi/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        echo '数据的更新页面';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        echo '数据的删除';
    }


    public function request(Request $request)
    {
        //获取URL get参数
        $name = $request -> get('name');


        dd($name);
    }


    //表单
    public function form()
    {
        return view('tiezi/form');
    }


    //上传
    public function upload(Request $request)
    {
       $path = $request->img->store('images');
       var_dump($path); 
        // echo 'aaa';
    }



}
