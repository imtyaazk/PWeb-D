Route::post('/absen/store','absenController@store');
public function store(Request $request)
{
	// insert data ke table absen
	DB::table('absen')->insert([
		'absen_nama' => $request->nama,
		'absen_kehadiran' => $request->kehadiran,
		'absen_umur' => $request->umur,
		
	]);
	// alihkan halaman ke halaman absen
	return redirect('/absen');
    
}

public function store(Request $request) 
{
    // insert data ke table absen
DB::table('absen')->insert([
	'absen_nama' => $request->nama,
	'absen_kehadiran' => $request->kehadiran,
	'absen_umur' => $request->umur,
]);
INSERT INTO ABSEN ('absen_nama','absen_jabatan','absen_umur','absen_alamat') VALUES ('nama','jabatan','umur','alamat');
/ alihkan halaman ke halaman absen
return redirect('/absen');