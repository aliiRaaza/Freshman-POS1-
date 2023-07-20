<nav class="navbar fixed-top navbar-expand-lg navbar-dark" id="navfix">
	<div class="container-fluid">
		<a class="navbar-brand" href="index.php?pg=home">
			<img src="assets/img/logo.png" alt="Logo" width="20%" height="20%" class="d-inline-block align-text-top"
				id="logofix">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
			<?php if(Auth::access('supervisor')):?>
		        <li class="nav-item" id="cre">
		          <a class="nav-link" href="index.php?pg=admin">Admin</a>
		        </li>
		    <?php endif;?>

	        <?php if(Auth::access('admin')):?>
		        <li class="nav-item" id="cre">
		          <a class="nav-link" href="index.php?pg=signup">Create User</a>
		        </li>
		    <?php endif;?>

		    <?php if(!Auth::logged_in()):?>
		        <li class="nav-item" id="cre">
		          <a class="nav-link" href="index.php?pg=login">Login</a>
		        </li>
	        <?php else:?>

		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            Hi, <?=auth('username')?> (<?=Auth::get('role')?>)
		          </a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <li><a class="dropdown-item" href="index.php?pg=profile">Profile</a></li>
		            <li><a class="dropdown-item" href="index.php?pg=edit-user&id=<?=Auth::get('id')?>">Profile-Settings</a></li>
		            <li><hr class="dropdown-divider"></li>
		            <li><a class="dropdown-item" href="index.php?pg=logout">Logout</a></li>
		          </ul>
		        </li>
	    	 <?php endif;?>
			
			</ul>
		</div>
	</div>
</nav>
<br>
<br>
<br>
<br>