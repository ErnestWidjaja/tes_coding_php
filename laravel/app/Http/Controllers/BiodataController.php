<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;
use App\Pendidikan;
use App\Pelatihan;
use App\Pekerjaan;
use Auth;

class BiodataController extends Controller
{
	public function index()
	{
		$data = Biodata::where('user_id', Auth::user()->id)->first();
		$pendidikan = Pendidikan::where('user_id', Auth::user()->id)->first();
		$pelatihan = Pelatihan::where('user_id', Auth::user()->id)->first();
		$pekerjaan = Pekerjaan::where('user_id', Auth::user()->id)->first();

		$admin_data = Biodata::all();
		return view('index', compact('data','pendidikan','pelatihan','pekerjaan','admin_data'));
	}

	public function store(Request $request)
	{
		Biodata::updateOrCreate([
			'user_id'   => Auth::user()->id,
		],[
			'nama'     			=> $request->nama,
			'posisi'    		=> $request->posisi,
			'no_ktp'   			=> $request->no_ktp,
			'ttl'       		=> $request->ttl,
			'jk'   				=> $request->jk,
			'agama' 			=> $request->agama,
			'golongan_darah' 	=> $request->goldar,
			'status' 			=> $request->status,
			'alamat_ktp' 		=> $request->alamat_ktp,
			'alamat_tinggal' 	=> $request->alamat_tinggal,
			'email'				=> $request->email,
			'telp' 				=> $request->telp,
			'orang_terdekat' 	=> $request->orang_terdekat,
			'skill' 			=> $request->skill,
			'ditempatkan' 		=> $request->ditempatkan,
			'penghasilan' 		=> $request->penghasilan,
		]);

		Pendidikan::updateOrCreate([
			'user_id'   => Auth::user()->id,
		],[
			'pendidikan1'	=> $request->pendidikan1,
			'institusi1'	=> $request->institusi1,
			'jurusan1'		=> $request->jurusan1,
			'lulus1'		=> $request->lulus1,
			'ipk1'			=> $request->ipk1,
			'pendidikan2'	=> $request->pendidikan2,
			'institusi2'	=> $request->institusi2,
			'jurusan2'		=> $request->jurusan2,
			'lulus2'		=> $request->lulus2,
			'ipk2'			=> $request->ipk2,
		]);

		Pelatihan::updateOrCreate([
			'user_id'   => Auth::user()->id,
		],[
			'kursus1'		=> $request->kursus1,
			'sertifikat1'	=> $request->sertifikat1,
			'tahun1'		=> $request->tahun_pelatihan1,
			'kursus2'		=> $request->kursus2,
			'sertifikat2'	=> $request->sertifikat2,
			'tahun2'		=> $request->tahun_pelatihan2,
		]);

		Pekerjaan::updateOrCreate([
			'user_id'   => Auth::user()->id,
		],[
			'perusahaan1'		=> $request->perusahaan1,
			'posisi1'			=> $request->posisi1,
			'pendapatan1'		=> $request->pendapatan1,
			'tahun1'			=> $request->tahun_pekerjaan1,
			'perusahaan2'		=> $request->perusahaan2,
			'posisi2'			=> $request->posisi2,
			'pendapatan2'		=> $request->pendapatan2,
			'tahun2'			=> $request->tahun_pekerjaan2,
		]);

		return redirect('/index');
	}

	public function detail($id)
	{
		$data = Biodata::where('id', $id)->first();
		$pendidikan = Pendidikan::where('id', $id)->first();
		$pelatihan = Pelatihan::where('id', $id)->first();
		$pekerjaan = Pekerjaan::where('id', $id)->first();
		return view('detail', compact('data','pendidikan','pelatihan','pekerjaan'));
	}
}
