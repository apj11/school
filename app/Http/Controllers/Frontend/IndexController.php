<?php

namespace App\Http\Controllers\Frontend;
use App\Testimonial;
use DB;
use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notice;
use App\Event;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//      $notice=DB::select('select * from notices');

//        $event=DB::select('select * from events');
        $notice=Notice::latest()->get();
        $event=Event::latest()->get();
        $blog= Blog::latest()->get();
        $testimonial= Testimonial::latest()->get();
        return view('frontend.index')
            ->with('testimonial',$testimonial)
        ->with('blog',$blog)
        ->with('notice',$notice)
        ->with('event',$event);
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        //
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
    }
}
