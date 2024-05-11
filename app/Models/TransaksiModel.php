<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi_header';

    protected $primaryKey = 'id_transaksi_header';
    
<<<<<<< HEAD
    protected $allowedFields = ['id_customer', 'nomor_transaksi', 'tanggal_transaksi', 'total', 'diskon', 'ppn', 'grand_total'];

    public function insertData($data)
    {
        $this->db->table('transaksi_header')->insert($data);
    }

    public function updateData($data)
    {
        $this->db->table('transaksi_header')->where('id_transaksi_header', $data['id_transaksi_header'])->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('transaksi_header')->where('id_transaksi_header', $data['id_transaksi_header'])->delete($data);
    }

}
=======
    protected $allowedFields = ['id_customer', 'nomer_transaksi', 'tanggal_transaksi', 'total', 'diskon', 'ppn', 'grand_total'];

}
>>>>>>> 9f74178bd09e6359563bf049f5aa181224f9d326
