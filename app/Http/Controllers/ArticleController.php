<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class ArticleController extends Controller

{

  
    private $categorie=[];



    public function index(){
        $articles= Article::all();
    return view("articoli", ["titoloArticoli"=> "Questi sono i miei articoli", "articoli"=> $articles], );
}



public function show($id) {
    $articles= Article::all();
return view("articoli_dettaglio", ["titolo"=> "Dettaglio Articoli", "articoli"=>$articles[$id]]);
}

public function bycategory($category){
   
    $articlesByCategory=Article::where('category',$category)->get();

 
    return view("articoli_categorie",['articoli'=>$articlesByCategory]);
    
   
}

public function store(Request $request){


    $request->validate([
        'title'=>'required|max:100',
        'description'=>'required',
        'category'=>'required'
    ]);
    Article::create($request->all());
    return redirect()->back()->with(['succes'=>'Articolo inserito con successo']);

    

}

public function create(){
    return view('create-article');
}


}
