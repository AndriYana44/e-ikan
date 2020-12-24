        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Sub Jenis</h1>
        <?= form_error('nama','<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Data tidak tersimpan!</strong> ','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'); ?>
        <?= $this->session->flashdata('pesan'); ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><a href="" class="btn btn-primary mb-3 tambahAkun" data-toggle="modal" data-target="#tambahModal">Tambah Data</a></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">ID Jenis</th>
                      <th scope="col">Nama Sub Jenis</th>
                      <th scope="col">Perintah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach ($data as $admin) :
                    ?>
                    <tr>
                      <th scope="row"><?= $no; ?></th>
                      <td><?= $admin['id_jenis']; ?></td>
                      <td><?= $admin['nama_sub']; ?></td>
                      <td><a href="<?= base_url('sub/editData/').$admin['id_jenis']; ?>" class="btn btn-success tampilSub" data-toggle="modal" data-target="#tambahModal" data-id="<?= $admin['id_jenis']; ?>">Edit</a>
                        <a href="<?= base_url('sub/hapusData/').$admin['id_jenis']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?');">Hapus</a></td>
                    </tr>
                    <?php
                      $no++;
                      endforeach; 
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



<!-- Tampilan Tambah Data -->

<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="<?= base_url('sub'); ?>" method="post">
      	<input type="hidden" name="id" id="id">
        <div class="form-group">
		    <label for="id_album">Jenis Produk</label>
		    <select class="form-control form-control-lg" id="id_jenis" name="id_jenis">
		   	<?php 
		   	$subdata = $this->db->get('jenis_produk')->result_array();
		   	foreach($subdata as $l){ ?>
			  <option value="<?php echo $l['id_jenis']; ?>"><?php echo $l['nama_jenis']; ?></option>
			<?php } ?>
			</select>
		</div>
        <div class="form-group">
		    <label for="nama_sub">Nama Sub</label>
		    <input type="text" class="form-control" id="nama_sub" name="nama_sub" placeholder="Nama Sub Jenis">
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Akhir tambah data --