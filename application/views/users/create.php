<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Create User</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
</head>
<body>
<div id="container">
    <h1>Create User</h1>
    <div class="container px-5 my-5">
        <form id="create_user" action="<?php echo base_url('usersCreate');?>" method="POST">
            <div class="form-floating mb-3">
                <input class="form-control" id="firstname" name="firstname" type="text" placeholder="Firstname" data-sb-validations="required" required />
                <label for="firstname">Firstname</label>
                <div class="invalid-feedback" data-sb-feedback="firstname:required">Firstname is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="lastname" name="lastname" type="text" placeholder="Lastname" data-sb-validations="required" required />
                <label for="lastname">Lastname</label>
                <div class="invalid-feedback" data-sb-feedback="lastname:required">Lastname is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="position" name="position" type="text" placeholder="Position" data-sb-validations="required" required />
                <label for="position">Position</label>
                <div class="invalid-feedback" data-sb-feedback="position:required">Position is required.</div>
            </div>
            
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>