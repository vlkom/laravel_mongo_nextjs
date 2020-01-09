<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DateCheck;

use App\Article;
use App\Category;

use DateService;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$ext = new DateCheck();
        //
        /*Article::create([
        				'firstname' => 'John',
        				'lastname' => 'Smith',
        				]);*/
        				
        //$article =  Article::all();	
        //$article =  Article::find('5a9c3278dc8c6c0ffc000d93');	
        //$article =  Article::where('_id','5a9c3278dc8c6c0ffc000d93')->orWhere('_id','5a9c32abdc8c6c0ffc000d94')->get();
        	
        	//$article =  Article::count();
        	
        	/*Category::create(
        	
        				[
        				'title' => 'Php',
        				]		
        	);
        	
        	Category::create(
        	
        				[
        				'title' => 'JS',
        				]		
        	);*/
        	
        	//$article = new Article(['firstname' => 'A Game of Thrones','lastname'=>'hello']);

			//$category = Category::first();

			//$book = $category->articles()->save($article);
			
			$article = Article::whereHas('category')->get();
			
			
        	
        
        dump($article);			
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
