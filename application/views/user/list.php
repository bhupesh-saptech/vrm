
<div class="container">
    <div class="row">
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>UserName</th>
                <th>Email</th>
            </tr>
        <?php   if($users) {
                    foreach($users as $count => $user) {?>
                <tr>
                    <td><?php echo ++$count; ?>
                    <td><?php echo $user->user_nm; ?></td>
                    <td><?php echo $user->mail_id; ?></td>
                </tr>
        <?php     
                    }
                }
        ?>
        </table>
    </div>
</div>
