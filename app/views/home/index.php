<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Hey <?php echo $_SESSION['username'] ?></h1>
                <p class="lead"> <?= date("F jS, Y"); ?></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p> <a href="/logout">Click here to logout</a></p>
        </div>
    </div>

    <!-- toast for denied access -->
    <?php if (isset($_SESSION['denied'])) { ?>
         <div class="toast show text-grey bg-danger bg-gradient border-1 position-absolute bottom-0 start-0" role="alert" aria-live="assertive" aria-atomic="true">
             <div class="toast-body ">
                 You are not authorized to access that page.
                 <div class="mt-2 pt-2 border-top">
                     <button type="button" class="btn btn-primary btn-sm" data-bs-dismiss="toast">Close</button>
                 </div>
             </div>
         </div>																				 
    <?php unset($_SESSION['denied']); } ?>

<?php require_once 'app/views/templates/footer.php' ?>
