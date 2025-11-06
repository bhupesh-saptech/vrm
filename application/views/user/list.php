<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">List of users</h5>
            <a href="<?=base_url('user/add')?>"><button class="btn btn-primary float-right">Add New User</button></a>
        </div>
        <div class="card-body">
            <div class="row">
                <table class="table table-bordered">
                    <tr>
                        <th style="width:06%">#</th>
                        <th style="width:10%">User ID</th>
                        <th style="width:25%">Email</th>
                        <th style="width:20%">Name</th>
                        <th style="width:15%">Phone no</th>
                        <th style="width:10%">Admin</th>
                        <th style="width:08%">View</th>
                        <th style="width:08%">Edit</th>
                        <th style="width:08%">Delete</th>
                    </tr>
                <?php   if($users) {
                            foreach($users as $count => $user) {?>
                        <tr>
                            <td><?php echo ++$count; ?>
                            <td><?php echo $user->user_id; ?></td>
                            <td><?php echo $user->mail_id; ?></td>
                            <td><?php echo $user->user_nm; ?></td>
                            <td><?php echo $user->user_ph; ?></td>
                            <td><?php echo $user->user_ad; ?></td>
                            <td class="text-center"><a href="<?=base_url('user/view').'/'.$user->user_id?>"><i class="fa fa-eye"></i></a></td>
                            <td class="text-center"><a href="<?=base_url('user/edit').'/'.$user->user_id?>"><i class="fa fa-edit"></i></a></td>
                            <td class="text-center"><a href="<?=base_url('user/delete').'/'.$user->user_id?>"><i class="fa fa-trash"></i></a></td>
                        </tr>
                <?php     
                            }
                        }
                ?>
                </table>
            </div>
        </div>
    </div>
</div>
