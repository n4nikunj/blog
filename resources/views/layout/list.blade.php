<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{VENDORPATH}}iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{VENDORPATH}}css/vendor.bundle.base.css">
  <link rel="stylesheet" href="{{VENDORPATH}}css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="{{VENDORPATH}}iconfonts/font-awesome/css/font-awesome.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{CSSPATH}}style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{IMGPATH}}favicon.png" />
</head>
    <body>
		<div class="container-scroller">
			<!-- partial -->
			<div class="container-fluid page-body-wrapper">
				@include('include.panelSideBar')
			
			<div class="main-panel">
			    @yield('content')
			</div>
			</div>
		</div>
			<script src="{{VENDORPATH}}js/vendor.bundle.base.js"></script>
			<script src="{{VENDORPATH}}js/vendor.bundle.addons.js"></script>
		  <!-- inject:js -->
		  <script src="{{JSPATH}}off-canvas.js"></script>
		  <script src="{{JSPATH}}misc.js"></script>
		  <!-- endinject -->
	</body>
</html>	