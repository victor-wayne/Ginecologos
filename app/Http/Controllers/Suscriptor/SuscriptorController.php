<?php
/**Esta Controlador, es la pantalla que veran los usuarios logeados**/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuscriptorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('suscriptor.index');
    }
}