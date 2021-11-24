Route: : get ('/absen/tambah','absenController@tambah');


//method untuk menampilkan view form tambah kehadiran absenController
public function tambah()
{
    
    // memanggil view tambah 
    return view('tambah');

}

