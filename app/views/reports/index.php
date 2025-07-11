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
                  </ol>
                </nav>
                <h1>Reports</h1>
                <br>
            </div>
        </div>
    </div>
    <!-- <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Choose a report
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="reports/reminders_all">All reminders</a></li>
        <li><a class="dropdown-item" href="reports/reminders_user">Number of reminders by user</a></li>
        <li><a class="dropdown-item" href="reports/logins_user">Number of logins by user</a></li>
      </ul>
    </div> -->
    <div>
        <form action="reports/" method="POST" name="theForm" id="theForm">
            <select form="theForm" name="selectedPage" >
              <option value="reminders_all">All reminders</option>
              <option value="reminders_count">Number of reminders by user</option>
              <option value="logins_user">Number of logins by user</option>
            </select>
            <input type="submit" value="Load page" />
        </form>
    </div>
    <br>

  <?php if ($_SESSION['report'] = "reminders_all") { ?>
      <div class="body-content"> 
          <table class="table table-light table-striped">
              <thead>
                  <th>ID</th>
                  <th>user ID</th>
                  <th>Subject</th>
                  <th>Date</th>
              </thead>
              <tbody>
                  <?php foreach ($data['reminders_list'] as $reminder) { ?>
                      <tr>
                          <td><?php echo $reminder['id']; ?></td>
                          <td><?php echo $reminder['user_id']; ?></td>
                          <td><?php echo $reminder['subject']; ?></td>
                          <td><?php echo $reminder['created_at']; ?></td>
                      </tr>
                  <?php } ?>
              </tbody>
          </table>
          <br>
      </div>
    <?php unset($_SESSION['report']); } else if ($_SESSION['report'] = "reminders_count") { ?>
      <div class="body-content">
          <table class="table table-light table-striped">
              <thead>
                  <th>User ID</th>
                  <th>Number of reminders</th>
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
    <?php unset($_SESSION['report']); } else if ($_SESSION['report'] = "logins_count") { ?>
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
    <?php unset($_SESSION['report']); } ?>
    
  




<?php require_once 'app/views/templates/footer.php' ?>
  