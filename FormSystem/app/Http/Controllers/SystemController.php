<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemController extends Controller
{

    public  function _construct(){
        /*$this->middleware('auth');

        $this->middleware('auth')
            ->only([
                'contato',
                'categoria'
            ]);

        $this->middleware('auth')->except([
           'index',
            'contato'
        ]);*/

    }
    public  function index(){

        $title = 'Home Page';
        $xss = '<script>alert("Attack XSS");</script>';
        return view('site.index', compact('title', 'xss'));

    }

    public  function contato(){
        return view('site.contact');

    }

    public  function categoria($id){
        return "listagens id categoria, {$id}";

    }

    public  function categoriaOp($id = null){
        return "listagens id categoria, {$id}";

    }
}
