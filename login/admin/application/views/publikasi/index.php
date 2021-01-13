        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Publikasi</h1>
        <?= form_error('nama','<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Data tidak tersimpan!</strong> ','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'); ?>
        <?= $this->session->flashdata('pesan'); ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Judul Publikasi</th>
                      <th scope="col">Gambar Publikasi</th>                      
                      <th scope="col">Isi Publikasi</th>
                      <th scope="col">tgl_posting</th>
                      <th scope="col">id_akun</th>
                      <th scope="col">id_kategori</th>
                      <th scope="col">ACC / Tidak</th>
                      <th scope="col">Tgl ACC</th>
                      <th scope="col">Perintah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach ($data as $admin) :
                        $tanggal = $admin['tgl_acc'];
                    ?>
                    <tr>
                      <th><?= $no; ?></th>
                      <td><?= $admin['judul_publikasi']; ?></td>
                      <td><a href="../gambar/<?= $admin['file_publikasi']; ?>" target="_blank"><img src="../gambar/<?= $admin['file_publikasi']; ?>" width="50px" height="50px"></a></td>
                      <td><?= $admin['isi_publikasi']; ?></td>
                      <td><?= $admin['tgl_posting']; ?></td>
                      <td><?= $admin['id_akun']; ?></td>
                      <td><?= $admin['id_kategori']; ?></td>
                      <td>
                        <?php 
                          if(!empty($tanggal)){
                            echo "<button class='btn btn-success'>".$admin['status']."</button>";
                          } else {
                          echo "<form method='post' action='".base_url('publikasi/acc/').$admin['id_akun']."'>
                            <select name='status' id='status' onchange='this.form.submit();' >
                              <option value=''>-Pilih Status-</option>
                              <option value='posting'>Posting</option>
                              <option value='tidak'>Tidak Posting</option>
                            </select>
                          </form>";
                          }
                        ?>
                      </td>
                      <td><?= $tanggal; ?></td>
                      <td><a href="<?= base_url('/hapusData/').$admin['id_publikasi']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?');">Hapus</a></td>
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