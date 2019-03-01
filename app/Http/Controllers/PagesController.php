<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function testcode() {
		echo 'kdegjhedg';
    }

    public function home() {

    	$students = Student::all();    	
    	return view('home', compact('students'));
    }
}
