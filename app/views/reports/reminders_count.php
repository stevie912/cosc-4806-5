<?php require_once 'app/views/templates/headerReports.php' ?>

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