<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingController extends Controller {

    public function index() {

    	$lessons = DB::table('lesson')->get();

		return view ('training.index', compact('lessons'));
    }

    public function show() {

		return view ('training.show');
    }
}
