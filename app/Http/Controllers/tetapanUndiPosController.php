<?php

namespace App\Http\Controllers\tetapan;

use App\Http\Controllers\Controller;
use App\UndiPos;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use App\Http\Requests\UndiPosRequest;
use DataTables;
use Illuminate\Pagination\Paginator;

class UndiPosController extends Controller
{
    protected $fieldSearchable = [

		'UndiPosId',
		'No_rujukan',
		'Nama',
		'Notel',
		'Email',
		'No_passport',
		'DPI_nama',
		'DPI_alamat1',
		'DPI_alamat2',
		'DPI_alamat3',
		'DPI_poskod',
		'DPI_bandar',
		'DPI_negeri',
		'DPI_Kod_Lokaliti',
		'DPI_lokaliti',
		'DPI_Kod_DM',
		'DPI_Dm',
		'DPI_Kod_Dun',
		'DPI_Dun',
		'DPI_Kod_Parlimen',
		'DPI_Parlimen',
		'Surat_alamat1',
		'Surat_alamat2',
		'Surat_alamat3',
		'Surat_poskod',
		'Surat_BandarId',
		'Surat_bandar',
		'Surat_NegeriId',
		'Surat_NegaraId',
		'Status',
		'DPI_semasa_nama',
		'DPI_semasa_alamat1',
		'DPI_semasa_alamat2',
		'DPI_semasa_poskod',
		'DPI_semasa_negeri',
		'DPI_semasa_lokaliti',
		'DPI_semasa_dm',
		'DPI_semasa_dun',
		'DPI_semasa_nama_par',
		'Myidentity_alamat1',
		'Myidentity_alamat2',
		'Myidentity_alamat3',
		'Myidentity_kod_bandar',
		'Myidentity_kod_negeri',
		'Myidentity_resident',
		'Myidentity_t_mati',
		'Dikunci_oleh',
		'Dikunci_pada',
		'Kiv_oleh',
		'Alasan_kiv',
		'Keterangan_kiv',
		'Disahkan_oleh',
		'Alasan_tolak',
		'Dibatal_oleh',
		'Dibatal_pada',
		'Alasan_batal',
		'PenggunaId',
		'KategoriUndiId',
		'deleted_at',
		'DaftarPada',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $input = $request->all();

            Paginator::currentPageResolver(function () use ($input) {
                return ($input['start'] / $input['length'] + 1);
            });
    
            $model = new UndiPos();

            if (!empty($input['search']['value'])) {
                foreach ($this->fieldSearchable as $column) {
                    $model = $model->whereLike($column, $input['search']['value']);
                }
            }

            $model = $model->paginate($input['length']);
            $output = $model->toArray();

            $response = [
                "draw"            => $input['draw'],
                "recordsTotal"    => intval($output['total']),
                "recordsFiltered" => intval($output['total']),
                "data"            => $output['data']
            ];

            return response()->json($response, 200);
        }

        return view('tetapan.ipos.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UndiPosRequest $request)
    {
        $input = $request->all();

        DB::beginTransaction();
        try {
            UndiPos::create($input);
            DB::commit();
            return response()->json([
                'type' => 'success',
                'code' => 200,
                'message' => 'Tetapan Berjaya Disimpan'
            ]);
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $UndiPos = UndiPos::where('UndiPosId', $id)->get()->first();
            return response()->json([
                'type' => 'success',
                'code' => 200,
                'data' => $UndiPos
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UndiPosRequest $request, $id)
    {
        $input = $request->all();
        
        try {
            $UndiPos = UndiPos::where('UndiPosId',$id)->get()->first();
            $UndiPos->update($input);
            return response()->json([
                'type' => 'success',
                'code' => 200,
                'message' => 'Kemaskini tetapan berjaya'
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        try {
            UndiPos::destroy($id);
            return response()->json([
                'type' => 'success',
                'code' => 200,
                'message' => 'Tetapan berjaya dipadam'
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /*
    public function filter($val)
    {
        try {
            $.'UndiPos' = 'UndiPosId'::orderBy('DaftarPada', 'asc')
                ->where('KodAgama', 'LIKE', '%' . $val . '%')
                ->orWhere('Penerangan', 'LIKE', '%' . $val . '%')
                ->get();
        
          return $agama;
        } catch (\Throwable $th) {
            throw $th;
           return ['agama' => 'ralat di filter function'];
       }  
    }
    */
}
