<?php require_once 'app/views/templates/headerReports.php' ?>

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

    <?php require_once 'app/views/templates/footer.php' ?>
</div>    