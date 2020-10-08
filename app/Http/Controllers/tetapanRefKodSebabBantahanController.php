<?php

namespace App\Http\Controllers\tetapan;

use App\Http\Controllers\Controller;
use App\RefKodSebabBantahan;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use App\Http\Requests\RefKodSebabBantahanRequest;
use DataTables;
use Illuminate\Pagination\Paginator;

class RefKodSebabBantahanController extends Controller
{
    protected $fieldSearchable = [

		'RefKodSebabBantahanID',
		'KodKategori',
		'KategoriSebab',
		'KodSebab',
		'Penerangan',
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
    
            $model = new RefKodSebabBantahan();

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

        return view('tetapan.kodsebabbantahan.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RefKodSebabBantahanRequest $request)
    {
        $input = $request->all();

        DB::beginTransaction();
        try {
            RefKodSebabBantahan::create($input);
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
            $RefKodSebabBantahan = RefKodSebabBantahan::where('RefKodSebabBantahanId', $id)->get()->first();
            return response()->json([
                'type' => 'success',
                'code' => 200,
                'data' => $RefKodSebabBantahan
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
    public function update(RefKodSebabBantahanRequest $request, $id)
    {
        $input = $request->all();
        
        try {
            $RefKodSebabBantahan = RefKodSebabBantahan::where('RefKodSebabBantahanId',$id)->get()->first();
            $RefKodSebabBantahan->update($input);
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
            RefKodSebabBantahan::destroy($id);
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
            $.'RefKodSebabBantahan' = 'RefKodSebabBantahanId'::orderBy('DaftarPada', 'asc')
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