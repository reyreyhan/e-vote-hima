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
		<h1>Admin</h1>
		
		<form action="<?php echo base_url('katelapo/aksi_login'); ?>" method="post">
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
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
