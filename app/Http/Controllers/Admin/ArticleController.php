<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
    	return view('admin.article.index');
    }
    
    public function create()
    {
    	return view('admin.article.create');
    }
    
    public function store(Request $request)
    {
 		//
    }
    
    public function show($id)
    {
    	//
    }
    
    public function edit($id)
    {
    	return view('admin.article.edit');
    }
    
    public function update(Request $request, $id) 
    {
    	//
    }
    
    public function destroy($id)
    {
    	//
    }
}
