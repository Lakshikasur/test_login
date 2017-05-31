<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Signup Form </title>
	<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home">KODING MADE SIMPLE</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if ($this->session->userdata('login')){ ?>
				<li><p class="navbar-text">Hello <?php echo $this->session->userdata('uname'); ?></p></li>
				<li><a href="<?php echo base_url(); ?>index.php/home/logout">Log Out</a></li>
				<?php } else { ?>
				<li><a href="<?php echo base_url(); ?>index.php/login">Login</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/signup">Signup</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	<div class="row-fluid">
	<div class="span12">
		<div class="container"> <br>
			
			
			<table  class="table table-striped table-bordered">
				<thead>
					<tr>
					    <th>Id</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>	
						<th>Action</th>	
					</tr>
				</thead>
				<tbody>	
					<?php 
					if( !empty($user_data) ) {
						foreach( $user_data as $uv ) {
							echo "<tr><td>".$uv->id."</td>";
							echo "<td>".$uv->fname."</td>";
							echo "<td>".$uv->lname."</td>";
							echo "<td>".$uv->email."</td>";
							echo "<td><a href='edit_user/".$uv->id."'>Edit</a> | <a href=''>Delete</a></td>";
							echo "</tr>";
					    }
					} else {
						echo "<tr colspan=4> <td>No records found!</td></tr>";
					}
					
					
					?>
					
					
				</tbody>
			</table>
			</form>
		</div>
	</div>
</div>
</div>
	
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>