<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

  
class UndiPos extends Model
{
    // use \OwenIt\Auditing\Auditable;
    
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'UndiPos';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'UndiPosId';

    /**
    * auto generate UUID
    */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->UndiPosId = Str::uuid();
            $model->DaftarOleh = Auth::check() ? Auth::user()->id : (string) Str::uuid();
            $model->ServerName = gethostname();
            $model->HostName = gethostname();

        });
        self::updating(function ($model) {
            $model->KemaskiniOleh = Auth::check() ? Auth::user()->id : (string) Str::uuid();
        });
    }

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
    * The name of the 'created at' column.
    *
    * @var string
    */
    const CREATED_AT = 'DaftarPada';

    /**
    * The name of the 'updated at' column.
    *
    * @var string
    */
    const UPDATED_AT = 'KemaskiniPada';

    /**
     * @var array
     */
    protected $fillable = [

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
		'DaftarOleh',
		'DaftarPada',
		'KemaskiniOleh',
		'KemaskiniPada',
    ];

}

