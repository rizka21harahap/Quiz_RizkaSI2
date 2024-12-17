<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Storage;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Validator;
use Mail;
use View;
use Session;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use PHPHtmlParser\Dom;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Session::has('username')) {
            // code...

             if (Session::has('idgol')) {
                // code...
                $gol2 = DB::table('tb_golongan')->where('gol_id', session('idgol'))->first();
            }
            else{
                $gol2 = "";
            }
            if (Session::has('idpel')) {
                // code...
                $pelanggan2 = DB::table('tb_pelanggan')->where('pel_id', session('idpel'))->first();
            }
            else{
                $pelanggan2 = "";
            }
            $datapelanggan = DB::table('tb_pelanggan')->count();
            $pelanggan = DB::table('tb_pelanggan')->get();
            $golongan = DB::table('tb_golongan')->get();
            $user = DB::table('tb_users')->get();
            $jumgol = DB::table('tb_golongan')->count();
             return view('dashboard',[
                'jumpel' => $datapelanggan,
                'pelanggan' => $pelanggan,
                'golongan' => $golongan,
                'user' => $user,
                'pelanggan2' => $pelanggan2,
                'jumgol' => $jumgol,
                'gol2' => $gol2
             ]);
        }
        else{
            return redirect('/');
        }
       
    }
    public function loginpros(Request $request)
    {
        // code...
         $validation = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
                   $checkdata = DB::table('loginadmin')->where('username',$validation['username'])->where('password', md5($validation['password']))->count();
            if ($checkdata > 0) {
                // code...
                $request->session()->put('username', $validation['username']);

                return redirect('/dashboard')->with('login','a');
            }
            else{
                return redirect('/')->with('gagal','a');
            }
        
    }
    public function logout(Request $request)
    {
        // code...
        $request->session()->forget('username');
        return redirect('/');
    }
    public function golongan(Request $request)
    {
        // code...
        $request->session()->forget('hal');
        $request->session()->put('hal','golongan');
        return redirect('/dashboard');

    }
     public function user(Request $request)
    {
        // code...
        $request->session()->forget('hal');
        $request->session()->put('hal','user');
        return redirect('/dashboard');

    }
     public function pelanggan(Request $request)
    {
        // code...
        $request->session()->forget('hal');
       
        return redirect('/dashboard');

    }
    public function tambahpelanggan(Request $request)
    {
        // code...
        date_default_timezone_set('Asia/Jakarta');
        $validation = $request->validate([
            'idpel' => '',
            'pelno' => '',
            'pelidgol' => '',
            'nama' => '',
            'pelalamat' => '',
            'nohp' => '',
            'noktp' => '',
            'pelseri' => '',
            'pelmeteran' => '',
            'pelidgol' => '',
            'idpel' => '',
            'status' => '',
            'peliduser'=>''

        ]);

        $insert = DB::table('tb_pelanggan')->insert([
            'pel_id' => $validation['idpel'],
            'pel_id_gol' => $validation['pelidgol'],
            'pel_no' => $validation['pelno'],
            'pel_nama' => $validation['nama'],
            'pel_alamat' => $validation['pelalamat'],
            'pel_hp' => $validation['nohp'],
            'pel_ktp' => $validation['noktp'],
            'pel_seri' => $validation['pelseri'],
            'pel_meteran' => $validation['pelmeteran'],
            'pel_aktif' => $validation['status'],
            'pel_id_user'=>$validation['peliduser'],
            'created_at' => date('Y-m-d\TH:i'),
            'update_at' => date('Y-m-d\TH:i'),

        ]);
        if ($insert) {
            // code...
            return redirect('/dashboard')->with('berhasilpel','a');
        }
        else{
            return redirect('/dashboard')->with('gagalpel','a');
        }
    }

    public function editpelpros(Request $request)
    {
        // code...
        date_default_timezone_set('Asia/Jakarta');
        $validation = $request->validate([
            
            'pelidgol' => '',
            'nama' => '',
            'pelalamat' => '',
            'nohp' => '',
            'noktp' => '',
            'pelseri' => '',
            'pelmeteran' => '',
            'pelidgol' => '',
            'idpel' => '',
            'status' => '',
            'peliduser'=>''

        ]);

        $insert = DB::table('tb_pelanggan')->where('pel_id',session('idpel'))->update([
           
          
            'pel_nama' => $validation['nama'],
            'pel_alamat' => $validation['pelalamat'],
            'pel_hp' => $validation['nohp'],
            'pel_ktp' => $validation['noktp'],
            'pel_seri' => $validation['pelseri'],
            'pel_meteran' => $validation['pelmeteran'],
            'pel_aktif' => $validation['status'],
            'pel_id_user'=>$validation['peliduser'],
            'update_at' => date('Y-m-d\TH:i'),

        ]);
        if ($insert) {
            // code...
            $request->session()->forget('idpel');
            $request->session()->forget('hal');

            return redirect('/dashboard')->with('berhasilpel','a');
        }
        else{
            return redirect('/dashboard')->with('gagalpel','a');
        }
    }
    public function deletepel(Request $request)
    {
        // code...
        $id = $request->id;
        $delete = DB::table('tb_pelanggan')->where('pel_id',$id)->delete();
        if ($delete) {
            // code...
            return redirect('/dashboard')->with('berhasilpel','a');
        }
        else{

            return redirect('/dashboard')->with('gagalpel','a');
            
        }
    }
    public function editpel(Request $request)
    {
        // code...
        $request->session()->forget('idpel');
        $request->session()->forget('hal');
        $request->session()->put('hal','editpel');
        $id = $request->id;
        $request->session()->put('idpel',$id);
        return redirect('/dashboard');

    }
    public function editgol(Request $request)
    {
        // code...
        $request->session()->forget('idpel');
        $request->session()->forget('hal');
        $request->session()->put('hal','editgol');
        $id = $request->id;
        $request->session()->put('idgol',$id);
        return redirect('/dashboard');

    }
    public function tambahgol(Request $request)
    {
        // code...
        date_default_timezone_set('Asia/Jakarta');
        $validation = $request->validate([
            'idgol' => '',
            'kodegol' => '',
            
            'namagol' => '',
           
        ]);

        $insert = DB::table('tb_golongan')->insert([
            'gol_id' => $validation['idgol'],
            'gol_kode' => $validation['kodegol'],
            'gol_nama' => $validation['namagol'],
            
            'created_at' => date('Y-m-d\TH:i'),
            'update_at' => date('Y-m-d\TH:i'),

        ]);
        if ($insert) {
            // code...
            return redirect('/dashboard')->with('berhasilpel','a');
        }
        else{
            return redirect('/dashboard')->with('gagalpel','a');
        }
    }
    public function deletegol(Request $request)
    {
        // code...
        $id = $request->id;
        $delete = DB::table('tb_golongan')->where('gol_id',$id)->delete();
        if ($delete) {
            // code...
            return redirect('/dashboard')->with('berhasilpel','a');
        }
        else{

            return redirect('/dashboard')->with('gagalpel','a');
            
        }
    }
    public function editgolpros(Request $request)
    {
        // code...
        date_default_timezone_set('Asia/Jakarta');
        $validation = $request->validate([
            'idgol' => '',
            'kodegol' => '',
            
            'namagol' => '',
           
        ]);

        $insert = DB::table('tb_golongan')->where('gol_id', session('idgol'))->update([
            'gol_nama' => $validation['namagol'],
            
            'update_at' => date('Y-m-d\TH:i'),

        ]);
        if ($insert) {
            // code...
            $request->session()->forget('idgol');
            $request->session()->forget('hal');
            $request->session()->put('hal','golongan');
            return redirect('/dashboard')->with('berhasilpel','a');
        }
        else{
            $request->session()->forget('hal');
            $request->session()->put('hal','golongan');
            return redirect('/dashboard')->with('gagalpel','a');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
