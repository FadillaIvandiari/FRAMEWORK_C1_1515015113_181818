<?php

Route::get('/', function () {
    return view ('master');
});

Route::get('/hello-world', function () {
    return ' Huhahahahahaha';
});

Route::get('/coba/{var}', function($variabel){
	return $variabel;
});


Route::get('/hello/{var?}', function($variabel = "Belum ada isinya"){
	return $variabel;
});

//------------------------------------------------------------------

Route::get('/pengguna', 'PenggunaController@awal');

Route::get('/pengguna/tambah', 'PenggunaController@tambah');

//------------------------------------------------------------------

Route::get('/Dosen', 'DosenController@awal');

Route::get('Dosen/tambah', 'DosenController@tambah');

//------------------------------------------------------------------

Route::get('/Mahasiswa', 'MahasiswaController@awal');

Route::get('/Mahasiswa/tambah', 'MahasiswaController@tambah');

// Route::get('/Mahasiswa/tambah/route', function(){
// 		$mahasiswa = new App\Mahasiswa();
//         $mahasiswa->nama = 'oktafira';
//         $mahasiswa->nim = '1515015123';
//         $mahasiswa->alamat = '';
//         $mahasiswa->pengguna_id = 3;
//         $mahasiswa->save();
//         return "Telah disave {$mahasiswa->nama} ke dalam databas";
// });

//------------------------------------------------------------------

Route::get('/Ruangan', 'RuanganController@awal');

Route::get('/Ruangan/tambah', 'RuanganController@tambah');

//------------------------------------------------------------------

Route::get('/Matakuliah', 'MatakuliahController@awal');

Route::get('/Matakuliah/tambah', 'MatakuliahController@tambah');

//------------------------------------------------------------------

Route::get('/Dosen_Matakuliah', 'Dosen_MatakuliahController@awal');

Route::get('/Dosen_Matakuliah/tambah', 'Dosen_MatakuliahController@tambah');

//------------------------------------------------------------------

Route::get('/Jadwal_Kuliah', 'Jadwal_KuliahController@awal');

Route::get('/Jadwal_Kuliah/tambah', 'Jadwal_KuliahController@tambah');

//------------------------------------------------------------------

Route::get('pengguna/lihat/{pengguna}', 'PenggunaController@lihat');
Route::post('pengguna/simpan', 'PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}', 'PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}', 'PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}', 'PenggunaController@hapus');

//------------------------------------------------------------------

Route::get('Matakuliah/lihat/{Matakuliah}', 'MatakuliahController@lihat');
Route::post('Matakuliah/simpan', 'MatakuliahController@simpan');
Route::get('Matakuliah/edit/{Matakuliah}', 'MatakuliahController@edit');
Route::post('Matakuliah/edit/{Matakuliah}', 'MatakuliahController@update');
Route::get('Matakuliah/hapus/{Matakuliah}', 'MatakuliahController@hapus');

//------------------------------------------------------------------

Route::get('Ruangan/lihat/{Ruangan}', 'RuanganController@lihat');
Route::post('Ruangan/simpan', 'RuanganController@simpan');
Route::get('Ruangan/edit/{Ruangan}', 'RuanganController@edit');
Route::post('Ruangan/edit/{Ruangan}', 'RuanganController@update');
Route::get('Ruangan/hapus/{Ruangan}', 'RuanganController@hapus');

//------------------------------------------------------------------

Route::get('Mahasiswa/{Mahasiswa}', 'MahasiswaController@lihat');
Route::get('Mahasiswa/tambah', 'MahasiswaController@tambah');
Route::post('Mahasiswa/simpan', 'MahasiswaController@simpan');
Route::get('Mahasiswa/edit/{Mahasiswa}', 'MahasiswaController@edit');
Route::post('Mahasiswa/edit/{Mahasiswa}', 'MahasiswaController@update');
Route::get('Mahasiswa/hapus/{Mahasiswa}', 'MahasiswaController@hapus');

//------------------------------------------------------------------

Route::get('Dosen/lihat/{Dosen}', 'DosenController@lihat');
Route::post('Dosen/simpan', 'DosenController@simpan');
Route::get('Dosen/edit/{Dosen}', 'DosenController@edit');
Route::post('Dosen/edit/{Dosen}', 'DosenController@update');
Route::get('Dosen/hapus/{Dosen}', 'DosenController@hapus');

//------------------------------------------------------------------

Route::get('Dosen_Matakuliah/{Dosen_Matakuliah}', 'Dosen_MatakuliahController@lihat');
Route::post('Dosen_Matakuliah/simpan', 'Dosen_MatakuliahController@simpan');
Route::get('Dosen_Matakuliah/edit/{Dosen_Matakuliah}', 'Dosen_MatakuliahController@edit');
Route::post('Dosen_Matakuliah/edit/{Dosen_Matakuliah}', 'Dosen_MatakuliahController@update');
Route::get('Dosen_Matakuliah/hapus/{Dosen_Matakuliah}', 'Dosen_MatakuliahController@hapus');

//------------------------------------------------------------------

Route::get('Jadwal_Kuliah/{Jadwal_Kuliah}', 'Jadwal_KuliahController@lihat');
Route::post('Jadwal_Kuliah/simpan', 'Jadwal_KuliahController@simpan');
Route::get('Jadwal_Kuliah/edit/{Jadwal_Kuliah}', 'Jadwal_KuliahController@edit');
Route::post('Jadwal_Kuliah/edit/{Jadwal_Kuliah}', 'Jadwal_KuliahController@update');
Route::get('Jadwal_Kuliah/hapus/{Jadwal_Kuliah}', 'Jadwal_KuliahController@hapus');