<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';

    protected $primaryKey = 'id_barang';
    
    protected $allowedFields = ['nama_barang', 'harga_barang', 'stok'];
<<<<<<< HEAD
    public function insertData($data)
    {
        $this->db->table('barang')->insert($data);
    }

    public function updateData($data)
    {
        $this->db->table('barang')->where('id_barang', $data['id_barang'])->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('barang')->where('id_barang', $data['id_barang'])->delete($data);
    }
}
=======
}
>>>>>>> 9f74178bd09e6359563bf049f5aa181224f9d326
