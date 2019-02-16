<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
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
			</div>
			<div class="main-panel">
			    @yield('content')
			</div>
		</div>
		  <!-- inject:js -->
		  <script src="{{JSPATH}}off-canvas.js"></script>
		  <script src="{{JSPATH}}misc.js"></script>
		  <!-- endinject -->
		  <!-- Custom js for this page-->
		  <script src="{{JSPATH}}dashboard.js"></script>
		  <!-- End custom js for this page-->
	</body>
</html>	