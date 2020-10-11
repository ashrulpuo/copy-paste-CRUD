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

//tetapan route
Route::group(['prefix' => 'tetapan', 'namespace' => 'tetapan'], function () {
    Route::resources([
		'kemaskinitrans' => 'RefKemaskiniTransController',
		'kodpotong' => 'RefKodPotongController',
		'kodproses' => 'RefKodProsesController',
		'kodsebabbantahan' => 'RefKodSebabBantahanController',
		'kodsumber' => 'RefKodSumberController',
		'kodunit' => 'RefKodUnitController',
		'level' => 'RefLevelController',
		'parti' => 'RefPartiController',
		'saluran' => 'RefSaluranController',
		'statusralat' => 'RefStatusRalatController',
		'statusrekod' => 'RefStatusRekodController',
		'tarafwarga' => 'RefTarafWargaController',
		'warganegara' => 'RefWarganegaraController',
		'bahagian' => 'RefBahagianController',
		'agama' => 'RefAgamaController',
		'alasan' => 'RefAlasanController',
		'alasanpenolakan' => 'RefAlasanPenolakanController',
		'bandar' => 'RefBandarController',
		'bangsa' => 'RefBangsaController',
		'gelaran' => 'RefGelaranController',
		'jantina' => 'RefJantinaController',
		'jawatan' => 'RefJawatanController',
		'negara' => 'RefNegaraController',
		'negeri' => 'RefNegeriController',
		'peristiwa' => 'RefPeristiwaController',
		'ppn' => 'RefPpnController',
		'parlimen' => 'RefParlimenController',
		'alamatnegeri' => 'RefAlamatNegeriController',
		'kodposkod' => 'RefKodPoskodController',
		'bangsamobile' => 'RefBangsaMobileController',
		'hilanglayak' => 'RefHilangLayakController',
		'jenistrans' => 'RefJenisTransController',
		'jenistransbck' => 'RefJenisTransbckController',

    ]);	
});
