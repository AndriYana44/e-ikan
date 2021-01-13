<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cara Membuat Auto Pop Up Responsive Menggunakan Bootstrap</title>
    <!-- CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
	<div id="modal" class="modal fade" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Cara Membuat Auto Pop Up Responsive Menggunakan Bootstrap</h4>
	      </div>
	      <div class="modal-body">
	        <p>One fine body&hellip;</p>
	      	<img src="http://1.bp.blogspot.com/--mt2hKRd_aE/VSTlo9gEe6I/AAAAAAAAAnI/UnSJwoH-vtg/s1600/Workshop%2BGratis%2BBersama%2BDUMET%2BSchool.jpg" alt="" class="img-responsive">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<p>
	  text
	</p>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script>
  $('#modal').modal('show');
</script>

  </body>
</html>