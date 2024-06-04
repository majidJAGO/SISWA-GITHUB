<?php

namespace App\Http\Controllers;
 
use App\Models\Jurusanpplg;
use Illuminate\Http\Request;
use App\Models\User;

 
class AutocompleteController extends Controller
{
    public function index()
    {
        return view('autocomplete');
    }
  
    
}