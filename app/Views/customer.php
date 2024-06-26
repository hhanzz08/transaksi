<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<<<<<<< HEAD

<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $subtitle ?></h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#tambah-data"><i
                        class="fas fa-plus"></i> Tambah Data
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> ';
                echo session()->getFlashdata('pesan');
                echo '</div>';
            }
            ?>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th width="50px">No</th>
                        <th>Nama Customer</th>
                        <th>No Telepon</th>
                        <th>Email</th>
                        <th width="100px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($customer as $key => $value) { ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td><?= $value['nama_customer'] ?></td>
                            <td><?= $value['nomor_telepon'] ?></td>
                            <td><?= $value['email'] ?></td>
                            <td class="text-center">
                                <button class="btn btn-warning btn-sm" data-toggle="modal"
                                    data-target="#edit-data<?= $value['id_customer'] ?>"><i
                                        class="fas fa-pencil-alt"></i></button>
                                <button class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#hapus-data<?= $value['id_customer'] ?>"><i
                                        class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<!-- Modal Tambah Data -->
<div class="modal fade" id="tambah-data">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data <?= $subtitle ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/customer/insertData" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_customer">Nama Customer</label>
                        <input type="text" name="nama_customer" id="nama_customer" class="form-control"
                            placeholder="Masukkan customer" required>
                    </div>
                    <div class="form-group">
                        <label for="nomor_telepon">Nomor Telepon</label>
                        <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control" placeholder="Masukkan Nomor Telepon"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan email"
                            required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<?php foreach ($customer as $key => $value) { ?>
<!-- Modal Tambah Data -->
<div class="modal fade" id="edit-data<?= $value['id_customer'] ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data <?= $subtitle ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/customer/updateData/<?= $value['id_customer'] ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_customer">Nama customer</label>
                        <input type="text" name="nama_customer" id="nama_customer" class="form-control"
                            placeholder="Masukkan customer" value="<?= $value['nama_customer'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nomor_telepon">Nomor Telepon</label>
                        <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control" placeholder="Masukkan nomor_telepon" value="<?= $value['nomor_telepon'] ?>"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan email" value="<?= $value['email'] ?>"
                            required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php } ?>

<!-- Modal Hapus Data -->
<?php foreach ($customer as $key => $value) { ?>
    <!-- Modal Tambah Data -->
    <div class="modal fade" id="hapus-data<?= $value['id_customer'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Data <?= $subtitle ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus <?= $subtitle ?> <b><?= $value['nama_customer'] ?></b>..?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('customer/deleteData/'.$value['id_customer']) ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>

<?= $this->endSection() ?>
=======
<a href="/customer/tambah" class="btn btn-md btn-success mb-3" data-toggle="modal" data-target="#modalTambahData">TAMBAH DATA</a>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nama customer</th>
                            <th>nomor telpon</th>
							   <th>email</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($customer as $key => $customer) : ?>
 
                            <tr>
                                <td><?php echo $customer['nama_customer'] ?></td>
                                <td><?php echo $customer['nomor_telepon'] ?></td>
								  <td><?php echo $customer['email'] ?></td>
                                <td class="text-center">
                                 	<a href="/customer/update/<?= $customer['id_customer'];?>">Edit</a>
                                    <a href="/customer/delete/<?= $customer['id_customer'];?>">Delete</a>
                                </td>
                            </tr>
 
                        <?php endforeach ?>
                    </tbody>
                </table>
                <a href="/" class="btn btn-danger">kembali</a>

                <!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTambahDataLabel">Tambah Data customer </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form tambah data -->
        <form action="/customer/tambah" method="POST">
          <div class="form-group">
            <label for="namaCustomer">nama cust</label>
            <input type="text" class="form-control" id="namaCustomer" name="nama_customer" required>
          </div>
          <div class="form-group">
            <label for="nomortelepon">Nomor telepon</label>
            <input type="text" class="form-control" id="nomortelepon" name="nomor_telepon" required>
          </div>
          <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" id="email" name="email" required>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
>>>>>>> 9f74178bd09e6359563bf049f5aa181224f9d326
