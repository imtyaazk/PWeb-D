

Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::get('/pegawai/tambah','PegawaiController@tambah');
// method untuk menampilkan view form tambah pegawai
public function tambah()
{

	// memanggil view tambah
	return view('tambah');

}
// method untuk menampilkan view form tambah pegawai
public function tambah()
{
 
	// memanggil view tambah
	return view('tambah');
 
}
<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Pada Laravel -</title>
</head>
<body>

 
	<h2>Data absen</h3>
 
	<a href="/data absen"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/data absen/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>
Route::post('/pegawai/store','PegawaiController@store');
Route::post('/pegawai/store','PegawaiController@store');
// method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('pegawai')->insert([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');

}
// method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('pegawai')->insert([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
 
}
public function store(Request $request) 
{
public function store(Request $request) 
{
// insert data ke table absen
DB::table('mahasiswa')->insert([
	'pegawai_nama' => $request->nama,
	'pegawai_jabatan' => $request->jabatan,
	'pegawai_umur' => $request->umur,
	'pegawai_alamat' => $request->alamat
]);
// insert data ke table absen
DB::table('mahasiswa')->insert([
	'pegawai_nama' => $request->nama,
	'pegawai_jabatan' => $request->jabatan,
	'pegawai_umur' => $request->umur,
	'pegawai_alamat' => $request->alamat
]);
INSERT INTO MAHASISWA ('mahasiswa_nama','mahasiswa_jabatan','mahasiswa_umur','mahasiswa_alamat') VALUES ('nama','jabatan','umur','alamat');
INSERT INTO MAHASISWA ('mahasiswa_nama','mahasiswa_jabatan','mahasiswa_umur','mahasiswa_alamat') VALUES ('nama','jabatan','umur','alamat');
INSERT INTO MAHASISWA ('','mahasiswa_jabatan','mahasiswa_umur','mahasiswa_alamat') VALUES ('nama','jabatan','umur','alamat');
// alihkan halaman ke halaman absen
return redirect('/absen');
// alihkan halaman ke halaman absen
return redirect('/absen');

   