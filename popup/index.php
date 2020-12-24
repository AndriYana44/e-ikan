<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="style.css" />

	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>
<body>
<div class="popUpBannerBox"> 
	<div class="popUpBannerInner"> 
		<div class="popUpBannerContent">
			<p><a href="#"><img src="http://jurnalcode.com/po-content/uploads/pop.jpg" alt="" /></a></p>
			
			<p><a href="#" class="closeButton">Tutup</a></p>
		</div>
	</div>
</div>
<script type="text/javascript">
	function showPopUpBanner() {
		$('.popUpBannerBox').fadeIn("2000");
	}
	setTimeout(showPopUpBanner, 3000);

	$('.popUpBannerBox').click(function(e) {
		if ( !$(e.target).is('.popUpBannerContent, .popUpBannerContent *' ) ) {
			$('.popUpBannerBox').fadeOut("2000");
			return false;
		}
	});

	$('.closeButton').click(function() {
		$('.popUpBannerBox').fadeOut("2000");
		return false;
	});
</script>
</body>
</html>