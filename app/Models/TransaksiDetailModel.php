<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiDetailModel extends Model
{
    protected $table            = 'transaksi_detail';
    protected $primaryKey       = 'id_transaksi_detail';
<<<<<<< HEAD
    protected $allowedFields    = ['id_transaksi_header', 'id_barang', 'qty', 'harga', 'jumlah'];

    public function insertData($data)
=======
    protected $allowedFields    = ['id_transaksi_header', 'nomor', 'id_barang', 'qty', 'harga', 'jumlah'];

public function insertData($data)
>>>>>>> 9f74178bd09e6359563bf049f5aa181224f9d326
    {
        $this->db->table('transaksi_detail')->insert($data);
    }

    public function updateData($data)
    {
        $this->db->table('transaksi_detail')->where('id_transaksi_detail', $data['id_transaksi_detail'])->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('transaksi_detail')->where('id_transaksi_detail', $data['id_transaksi_detail'])->delete($data);
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 9f74178bd09e6359563bf049f5aa181224f9d326
