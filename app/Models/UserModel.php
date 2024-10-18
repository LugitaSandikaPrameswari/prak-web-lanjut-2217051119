<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    
    protected $table = 'user';
    
    protected $fillable = [
        'nama',
        'npm',
        'kelas_id',
        'foto', // Kolom 'foto' untuk mass-assignment
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    // Method getUser bisa digunakan untuk mengambil semua user atau berdasarkan id
    public function getUser($id = null)
    {
        // Query untuk join tabel 'kelas' dengan 'user' dan select beberapa kolom
        $query = $this->join('kelas', 'kelas.id', '=', 'user.kelas_id')
                      ->select('user.id', 'user.nama', 'user.npm', 'user.foto', 'kelas.nama_kelas');

        // Jika $id diisi, tambahkan kondisi where untuk mencari berdasarkan id
        if ($id != null) {
            return $query->where('user.id', $id)->first(); // Mengembalikan 1 record jika $id diisi
        }

        // Jika $id tidak diisi, kembalikan semua data user
        return $query->get();
    }
}
