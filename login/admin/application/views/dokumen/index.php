        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Dokumen</h1>
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
			          <th scope="col">Kategori</th>
			          <th scope="col">Nama Dokuman</th>
			          <th scope="col">Dokumen</th>
			          <th scope="col">Link dokumen</th>
			          <th scope="col">Keterangan</th>
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
          <td><?= $admin['id_kategori']; ?></td>
          <td><?= $admin['nama_dokumen']; ?></td>
          <td><a href="<?= base_url('../dokumen/').$admin['file']; ?>"><?= $admin['file']; ?></a></td>
          <td><a href="<?= $admin['link_file']; ?>"><?= $admin['link_file']; ?></td>
          <td><?= $admin['ket']; ?></td>
          <td><a href="<?= base_url('dokumen/editData/').$admin['id_dokumen']; ?>" class="btn btn-success tampilDokumen" data-toggle="modal" data-target="#tambahModal" data-id="<?= $admin['id_dokumen']; ?>">Edit</a>
            <a href="<?= base_url('dokumen/hapusData/').$admin['id_dokumen']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?');">Hapus</a></td>
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
      	<?php echo form_open_multipart('dokumen/upload'); ?>
      		<input type="hidden" name="id_dokumen" id="id_dokumen">
      	<div class="form-group">
		    <label for="id_album">Kategori</label>
		    <select class="form-control form-control-lg" name="id_kategori">
		    <?php foreach($subdata as $l){ ?>
			  <option value="<?php echo $l['id_kategori']; ?>"><?php echo $l['nama_kategori']; ?>
			  </option>
             <?php } ?>
			</select>

		</div>
        <div class="form-group">
		    <label for="nama_dokumen">Nama Dokumen</label>
		    <input type="text" class="form-control" id="nama_dokumen" name="nama_dokumen" placeholder="Nama dokumen">
		</div>
		<div class="form-group">
		    <label for="file">Dokumen</label>
		    <input type="file" class="form-control" id="file" name="file" placeholder="File dokumen">
		</div>
		<div class="form-group">
		    <label for="link_file">Link dokumen</label>
		    <textarea class="form-control" id="link_file" name="link_file" rows="3"></textarea>
		</div>
		<div class="form-group">
		    <label for="ket">Keterangan</label>
		    <textarea class="form-control" id="ket" name="ket" rows="3"></textarea>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <input type="submit" class="btn btn-primary" value="Simpan">
      </div>
      <?php echo form_close() ?>
    </div>
  </div>
</div>

<!-- Akhir tambah data --