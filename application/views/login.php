<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>...</title>
  
  
  
      <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

  
</head>

<body>
  <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form action="<?php echo base_url('welcome/aksi_login'); ?>" method="post">
			<input type="text" name="nrp" placeholder="NRP">
			<input type="password" name="ukey" placeholder="Ukey">
			<button type="submit" id="login-button">Login</button>
		</form>

	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

    <script src="<?php echo base_url('assets/js/index.js'); ?>"></script>

</body>
</html>
