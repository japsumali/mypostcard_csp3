<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Article;
use Session;
use Auth;
use \App\User;

class ArticleController extends Controller
{
    function dashboard(){
		$dashboardshow = Article::orderBy('id', 'desc')->paginate(6); 
			return view('dashboard.dashboard_show', compact('dashboardshow')); 
		}

	function explore(){
		$dashboardshowexplore = Article::orderBy('id', 'desc')->paginate(6); 
			return view('dashboard.explore', compact('dashboardshowexplore')); 
		}

	function dashboard_single($id){
		$dashboard_showsingle = Article::find($id); 
		$user_id = auth()->user('id');
		$user = User::find($user_id);
			return view('dashboard.dashboard_single', compact('dashboard_showsingle')); 
		}

	function explore_single($id){
		$dashboard_showsingle = Article::find($id); 
		$user_id = auth()->user('id');
		$user = User::find($user_id);
			return view('dashboard.explore_single', compact('dashboard_showsingle')); 
		}

	function create(){
		return view('dashboard.profile_page_create');
	}

	function store(Request $storemyarticle){
		$new_article = new Article();
		$new_article->title = $storemyarticle->title;
		$new_article->content = $storemyarticle->content;

		$uploadedfile = $storemyarticle->file('image');
		$uploadedfile->move('img', $uploadedfile->getClientOriginalName());
		$new_article->image = $uploadedfile->getClientOriginalName();
		
		$new_article->user_id = Auth::user()->id; 
		$new_article->save();

		return redirect('dashboard');
	}

	function delete($id){
		$postcard_tbd = Article::find($id);
		$postcard_tbd->delete();
		Session::flash('delete_postcard_notification', "Postcard entry has been deleted");

		return redirect('dashboard');

	}

	function edit_postcard($id){
		$postcard_tbe = Article::find($id);

		return view('dashboard.dashboard_edit_postcard', compact('postcard_tbe'));
	}

	function edit($id, Request $edit_postcard_entry){
		$postcard_tbe = Article::find($id);
		
		$uploadedfile = $edit_postcard_entry->file('image');

		if ($uploadedfile == null) {
				$postcard_tbe->title = $edit_postcard_entry->title;
				$postcard_tbe->content = $edit_postcard_entry->content;
				$postcard_tbe->save();
		}
		else {
				$uploadedfile->move('img', $uploadedfile->getClientOriginalName());
				$postcard_tbe->image = $uploadedfile->getClientOriginalName();
				$postcard_tbe->save();
		}


		Session::flash('edit_postcard_notification', "Postcard Entry Edited Successfully");

		return redirect("/dashboard/$id");
	}

	//admin

	    function showpostcards(){
			$dashboardshow = Article::orderBy('id', 'desc')->paginate(6); 
				return view('admin.admin_postcards', compact('dashboardshow')); 
			}
		function showArticlesByAuthor($id){
			$articles = User::find($id)->get_articles;

			return view('admin.user_postcards', compact('articles'));
		}
}


