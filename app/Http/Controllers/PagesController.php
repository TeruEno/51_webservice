<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about() {

        $first_name = 'Teruaki';
        $last_name = 'Enomoto';

        return view('pages.about', compact('first_name','last_name'));
    }
}
?>
