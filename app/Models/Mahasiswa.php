<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail; 
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable; 
use Illuminate\Notifications\Notifiable; 
use Illuminate\Database\Eloquent\Model; //Model Eloquent
Use App\Models\Mahasiswa; 
use App\Models\Kelas;
use App\Models\Mahasiswa_Matakuliah;

class Mahasiswa extends Model
{
    protected $table="mahasiswa"; 
    // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas 
    public $timestamps= false; 
    protected $primaryKey = 'nim'; // Memanggil isi DB Dengan primarykey 
    /** 
     * The attributes that are mass assignable.
     * 
     * 
     * * @var array */ 
    
     protected $fillable = [ 
         'Nim', 
         'Nama', 
         'email',
         'Kelas_Id', 
         'Jurusan', 
         'No_Handphone', 
         'tanggal_lahir',
        ];
    
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function matakuliah(){
        return $this->belongsToMany(MataKuliah::class,'mahasiswa_matakuliah','mahasiswa_nim','matakuliah_id')->withPivot('nilai');
    }
}
