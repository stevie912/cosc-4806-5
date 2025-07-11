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
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= ucwords($_SESSION['controller']); ?></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= ucwords($_SESSION['method']); ?></li>

                  </ol>
                </nav>
                <h1>Login Count by Username</h1>
                <br>
            </div>
        </div>
    </div>
    <div class="body-content"> 
        <table class="table table-light table-striped">
            <thead>
                <th>username</th>
                <th># of Logins</th>

            </thead>
            <tbody>
                <?php foreach ($data['logins_count'] as $logins_count) { ?>
                    <tr>
                        <td><?php echo $logins_count['user']; ?></td>
                        <td><?php echo $logins_count['user_count']; ?></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <br>
    </div>

    <?php require_once 'app/views/templates/footer.php' ?>
</div>    