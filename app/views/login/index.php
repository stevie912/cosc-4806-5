<?php require_once 'app/views/templates/headerPublic.php'?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>You are not logged in</h1>
            </div>
        </div>
    </div>


	<?php if (isset($_SESSION['failed_attempts']) || isset($_SESSION['no_user'])) { 	?>
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="alert alert-danger" role="alert">
								Incorrect username or password!
								<br>
								You will be temporarily locked out after <?= 3 - $_SESSION['failed_attempts'] ?> more unsuccessful login attempts
							</div>
						</div>
				</div>
	<?php		}	?>
	
	
<div class="row justify-content-center">
    <div class="col-sm-auto">
		<form action="/login/verify" method="post" >
		<fieldset>
			<div class="form-group">
				<label for="username">Username</label>
				<input required type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input required type="password" class="form-control" name="password">
			</div>
            <br>
		    <button type="submit" class="btn btn-primary">Login</button>
		</fieldset>
		</form> 
			<br>
			<a href="/create"><h5 class="text-center">Create new user</h5></a>
			<br>
	</div>
</div>
    <?php require_once 'app/views/templates/footer.php' ?>
