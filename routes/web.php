<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function(){
    return view('hallo');
});
Route::get('/artikel/{judul}',function($nama){
    return "menampilkan judul artikel $nama";
});
Route::get('/artikel/{kategori}/{judul}',function($kategori,$judul){
    return "kategori : $kategori , title : $judul";
});
Route::get('/siswa/{nama}/{jurusan}',function($nama,$jurusan){
    return "<h3>nama : $nama</h3><h3>jurusan : $jurusan</h3>";
});
Route::get('/siswa/{nipd}',function($nipd){
    return "NIPD siswa : $nipd";
})->where('nipd','[A-Z]{2}[0-9]+');
Route::get('/user',function(){
    return view('profil.hallo',['user1'=>'alpharezz']);
});
Route::get('/user',function(){
    return view('admin.profil');
});
Route::get('/proto',function(){
    return view('admin.potofolio');
});
Route::fallback(function(){
    return "maaf halaman tidak di temukan";
});

Route::get('/experience',function(){
    return view('myblog/experience');
});
Route::get('/portofolio', function(){
    return view('myblog/portofolio');
});
Route::get('/home', function(){
    return view('myblog/home');
});
Route::get('/haloo', function(){
    return view();
});
Route::get('/exp',function(){
    return view('admin/experiencee');
});

