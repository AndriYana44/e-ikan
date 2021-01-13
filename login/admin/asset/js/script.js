$(function(){
//bagian kategori
	$('.tampilKategori').on('click', function(){
		$('#tambahModalLabel').html('Ubah Data');
		$('.modal-footer button[type=submit]').html('Ubah');
		$('.modal-body form').attr('action', 'http://localhost/ikan/admin/kategori/ubah');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/ikan/admin/kategori/ubahData',
			data: {id, id},
			method: 'post',
			dataType: 'json',
			success: function(data){
				$('#nama_kategori').val(data.nama_kategori);
				$('#id').val(data.id_kategori);
			}
		});

	});

//bagian jenis
	$('.tampilJenis').on('click', function(){
		$('#tambahModalLabel').html('Ubah Data');
		$('.modal-footer button[type=submit]').html('Ubah');
		$('.modal-body form').attr('action', 'http://localhost/ikan/admin/jenis/ubah');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/ikan/admin/jenis/ubahData',
			data: {id, id},
			method: 'post',
			dataType: 'json',
			success: function(data){
				$('#nama_jenis').val(data.nama_jenis);
				$('#id').val(data.id_jenis);
				$('#id_kategori').val(data.id_kategori);
			}
		});

//bagian level
	$('.tampilLevel').on('click', function(){
		$('#tambahModalLabel').html('Ubah Data');
		$('.modal-footer button[type=submit]').html('Ubah');
		$('.modal-body form').attr('action', 'http://localhost/ikan/admin/level/ubah');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/ikan/admin/level/ubahData',
			data: {id, id},
			method: 'post',
			dataType: 'json',
			success: function(data){
				$('#id').val(data.id_level);
				$('#id_level').val(data.id_level);
			}
		});


//bagian Review
	$('.tampilReview').on('click', function(){
		$('#tambahModalLabel').html('Ubah Data');
		$('.modal-footer button[type=submit]').html('Ubah');
		$('.modal-body form').attr('action', 'http://localhost/ikan/admin/review/ubah');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/ikan/admin/review/ubahData',
			data: {id, id},
			method: 'post',
			dataType: 'json',
			success: function(data){
				$('#id').val(data.id_reviuw);
				$('#jml_reviuw').val(data.jml_reviuw);
				$('#ket').val(data.ket);
			}
		});

//bagian Review
	$('.tampilDiskon').on('click', function(){
		$('#tambahModalLabel').html('Ubah Data');
		$('.modal-footer button[type=submit]').html('Ubah');
		$('.modal-body form').attr('action', 'http://localhost/ikan/admin/diskon/ubah');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/ikan/admin/diskon/ubahData',
			data: {id, id},
			method: 'post',
			dataType: 'json',
			success: function(data){
				$('#id').val(data.id_diskon);
				$('#diskon').val(data.diskon);
				$('#ket').val(data.ket);
			}
		});


//bagian Sub
	$('.tampilSub').on('click', function(){
		$('#tambahModalLabel').html('Ubah Data');
		$('.modal-footer button[type=submit]').html('Ubah');
		$('.modal-body form').attr('action', 'http://localhost/ikan/admin/sub/ubah');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/ikan/admin/sub/ubahData',
			data: {id, id},
			method: 'post',
			dataType: 'json',
			success: function(data){
				$('#id').val(data.id_sj);
				$('#nama_sub').val(data.nama_sub);
				$('#id_jenis').val(data.id_jenis);
			}
		});
	});




});