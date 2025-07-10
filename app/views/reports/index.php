<?php 
    if ($_SESSION['admin'] != true) {    //user is not admin, deny access
        $_SESSION['denied'] = true;
        header('Location: /home');
    }
    require_once 'app/views/templates/header.php' 
?>

<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Reports</h1>
                <br>
            </div>
        </div>
    </div>
    <div class="body-content"> 
    hello
    </div>
</div>

<?php require_once 'app/views/templates/footer.php' ?>
  