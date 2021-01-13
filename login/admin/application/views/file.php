<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p><?php echo $this->session->flashdata('msg') ?></p>
	<?php echo form_open_multipart('file/upload'); ?>
       		<input type="hidden" id="id" name="id">
        <div class="form-group">
		    <label for="nama">Nama</label>
		    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda">
		</div>
	  <div class="form-group">
	    <label for="alamat">Alamat</label>
	    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
	  </div>
	  <div class="form-group">
	    <label for="link_alamat">Link Alamat</label>
	    <textarea class="form-control" id="link_alamat" name="link_alamat" rows="3"></textarea>
	  </div>
	  <div class="form-group">
		  <label for="telpon">Telpon</label>
		  <input type="text" class="form-control" id="telpon" name="telpon" placeholder="Telpon Anda">
	  </div>
	  <div class="form-group">
		  <label for="fax">Fax</label>
		  <input type="text" class="form-control" id="fax" name="fax" placeholder="Fax Anda">
	  </div>
	  <div class="form-group">
		  <label for="email">Email</label>
		  <input type="text" class="form-control" id="email" name="email" placeholder="Email Anda">
	  </div>
	  <div class="form-group">
		  <label for="logo">Logo</label>
		  <input type="file" class="form-control" id="logo" name="file">
	  </div>
	  <div class="form-group">
	    <label for="penjelasan">Penjelasan</label>
	    <textarea class="form-control" id="penjelasan" name="penjelasan" rows="3"></textarea>
	  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <input type="submit" class="btn btn-primary" value="Simpan">
      </div>
	<?php echo form_close() ?>
</body>
</html>