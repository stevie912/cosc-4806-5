<?php require_once 'app/views/templates/headerReports.php' ?>

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