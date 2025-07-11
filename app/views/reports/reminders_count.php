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
                <h1>Reminder Count by User</h1>
                <br>
            </div>
        </div>
    </div>

    <div class="body-content"> 
        <table class="table table-light table-striped">
            <thead>
                <th>user ID</th>
                <th># of Reminders</th>
            </thead>
            <tbody>
                <?php foreach ($data['reminders_count'] as $reminder) { ?>
                    <tr>
                        <td><?php echo $reminder['id']; ?></td>
                        <td><?php echo $reminder['user_count']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <br>
    </div>

    <?php require_once 'app/views/templates/footer.php' ?>
</div>    