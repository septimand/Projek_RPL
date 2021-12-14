<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
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
        {
           $role = Auth::user()->hak_akses;
            if($role == "Admin"){
                return redirect('dashboardAdmin');
            } else if($role == "Mahasiswa"){
                return redirect('dashboardMahasiswa');
            }else if($role == "Dosen"){
                return redirect('dashboardDosen');
            }else {
                return redirect()->to('logout');
            }
        }
    }
}
