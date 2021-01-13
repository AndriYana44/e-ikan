        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Foto</h1>
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
		      <th scope="col">Kategori Album</th>
		      <th scope="col">Judul</th>
		      <th scope="col">Foto</th>
		      <th scope="col">Link Foto</th>
		      <th scope="col">Deskripsi</th>
		      <th scope="col">Tgl Upload</th>
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
		      <td><?= $admin['id_album']; ?></td>
		      <td><?= $admin['judul']; ?></td>
		      <td><a href="<?= base_url('../gambar/').$admin['foto']; ?>"><?= $admin['foto']; ?></a></td>
		      <td><a href="<?= $admin['link_foto']; ?>"><?= $admin['link_foto']; ?></a></td>
		      <td><?= $admin['deskripsi']; ?></td>
		      <td><?= $admin['tgl_upload']; ?></td>
		      <td><a href="<?= base_url('foto/editData/').$admin['id_foto']; ?>" class="btn btn-success tampilFoto" data-toggle="modal" data-target="#tambahModal" data-id="<?= $admin['id_foto']; ?>">Edit</a>
		      	<a href="<?= base_url('foto/hapusData/').$admin['id_foto']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?');">Hapus</a></td>
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
      	<?php echo form_open_multipart('foto/upload'); ?>
      		<input type="hidden" name="id_foto" id="id_foto">
      	<div class="form-group">
		    <label for="id_album">Kategori Album</label>
		    <select class="form-control form-control-lg" name="id_album">
		   	<?php foreach($subdata as $l){ ?>
			  <option value="<?php echo $l['id_album']; ?>"><?php echo $l['judul']; ?></option>
			<?php } ?>
			</select>
		</div>
        <div class="form-group">
		    <label for="judul">Judul</label>
		    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul foto">
		</div>
		<div class="form-group">
		    <label for="foto">foto</label>
		    <input type="file" class="form-control" id="file" name="file" placeholder="File foto">
		</div>
		<div class="form-group">
		    <label for="link_foto">Link foto</label>
		    <textarea class="form-control" id="link_foto" name="link_foto" rows="3"></textarea>
		</div>
		<div class="form-group">
		    <label for="deskripsi">Deskripsi</label>
		    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
		</div>
		<div class="form-group">
		    <label for="tgl_upload">Tanggal Upload</label>
		    <input type="date" class="form-control" id="tgl_upload" name="tgl_upload" placeholder="File foto">
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