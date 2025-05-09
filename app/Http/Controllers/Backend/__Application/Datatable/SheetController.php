<?php

namespace App\Http\Controllers\Backend\__Application\Datatable;

use App\Http\Controllers\Controller;
use DataTables;
use Illuminate\Http\Request;
use Redirect, Response;

use App\Models\Backend\__Application\Datatable\Sheet;

use Session;

use App\Exports\SiswaExport;
use App\Imports\SiswaImport;
use Maatwebsite\Excel\Facades\Excel;

class SheetController extends Controller
{
	public function index()
	{
		$siswa = Sheet::all()->skip(1);
		return view('siswa',['siswa'=>$siswa]);
	}

	public function export_excel()
	{
		return Excel::download(new SiswaExport, 'siswa.xlsx');
	}

	public function import_excel(Request $request)
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);

		// menangkap file excel
		$file = $request->file('file');

		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();

		// upload ke folder file_siswa di dalam folder public
		$file->move('file_siswa',$nama_file);

		// import data
    Sheet::truncate();
		Excel::import(new SiswaImport, public_path('/file_siswa/'.$nama_file));

		// notifikasi dengan session
		Session::flash('sukses','Data Siswa Berhasil Diimport!');

		// alihkan halaman kembali
		return redirect('/siswa');
	}
}
