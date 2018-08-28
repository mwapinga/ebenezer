<?php
namespace App\Http\Controllers;
use App\beststudents;
use App\events;
use App\testimonial;
use App\slider;
use App\staffs;
use App\labaratory;
use App\Blog;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function index()
    {
        $bestdents= beststudents::all();
        $event= events::all();
        $test = testimonial::all();
        $slider= slider::all();
        $stafs = staffs::all();
        $lab = labaratory::all();
        $news = Blog::all();


         return view('pages.index',compact('bestdents','event','test','lab','stafs','slider','news') );
    }

    public function create()
    {
       

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
       

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersRequest $request, $id)
    {
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      

    }
}
