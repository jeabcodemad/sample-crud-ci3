<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p {
		margin: 0 0 10px;
		padding:0;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
</head>
<body>

<div id="container">
	<h1>User</h1>

	<div id="body">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Firstname</th>
					<th scope="col">Lastname</th>
					<th scope="col">Postion</th>
					<th scope="col">Created Date</th>
					<th scope="col"><a href="<?php echo base_url('usersCreate');?>" class="btn btn-success">Add</a></th>
				</tr>
			</thead>
			<tbody>
				<?php
				if($users) {
					$i = 0;
					foreach($users as $user) {
					$i += 1;
				?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $user->first_name;?></td>
					<td><?php echo $user->last_name;?></td>
					<td><?php echo $user->position;?></td>
					<td><?php echo $user->created_date;?></td>
					<td>
						<a href="<?php echo base_url('users/edit/' . $user->id);?>" class="btn btn-warning">Edit</a> 
						<a href="<?php echo base_url('users/delete/' . $user->id);?>" class="btn btn-danger" onclick="return confirm('Confirm delete');">Delete</a>
					</td>
				</tr>
				<?php
					}
				}else {
				?>
				<tr>
					<td colspan="6" class="text-center">No data</td>
				</tr>
				<?php }?>
			</tbody>
		</table>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
