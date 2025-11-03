<div class="py-5">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow">
                <div class="card-header">
                    <h5><?=$action?> User</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('user/save')?>" id="userform" autocomplete="off" >
                        <table class="table table-bordered">
                            <tr>
                                <td colspan="2">
                                    <input type="hidden" name="action"  value="<?=$action?>">
                                    <input type="hidden" name="user_id" value="<?=$user->user_id?>">
                                    <label class="form-label">Email ID</label>
                                    <input class="form-control" type="email" name="mail_id" value = "<?=$user->mail_id?>" autocomplete="off" >
                                    <small class="text-danger"><?php echo form_error('mail_id');?></small>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-label" >user Name</label>
                                    <input class="form-control" type="text" name="user_nm" value = "<?=$user->user_nm?>">
                                    <small class="text-danger"><?php echo form_error('user_nm');?></small>
                                </td>
                                <td>
                                    <label class="form-label" >Phone No</label>
                                    <input class="form-control" type="text" name="user_ph"  value = "<?=$user->user_ph?>">
                                    <small class="text-danger"><?php echo form_error('user_ph');?></small>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-label" >Password</label>
                                    <input class="form-control" type="password" name="pass_wd" value = "<?=$user->pass_wd?>" autocomplete="new-password">
                                    <small class="text-danger"><?php echo form_error('pass_wd');?></small>
                                </td>
                                <td>
                                    <label class="form-label" >Confirm Password</label>
                                    <input class="form-control" type="password" name="cpas_wd" value = "<?=$user->pass_wd?>">
                                    <small class="text-danger"><?php echo form_error('cpas_wd');?></small>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-label" >User Role</label>
                                    <select class="form-control" name="role_id" >
                                        <option value=""  <?php if($user->role_id == "" ) {echo 'selected';} ?>>select role</option>
                                        <option value="1" <?php if($user->role_id == "1") {echo 'selected';} ?>>admin</option>
                                        <option value="2" <?php if($user->role_id == "2") {echo 'selected';} ?>>user</option>
                                    </select>
                                    <small class="text-danger"><?php echo form_error('role_id');?></small>
                                </td>
                                <td>
                                    <label class="form-label" >User Status</label>
                                    <select class="form-control" name="user_st" >
                                        <option value=""  <?php if($user->user_st == ""  ) {echo 'selected';} ?>>select status</option>
                                        <option value="1" <?php if($user->user_st == "1" ) {echo 'selected';} ?>>Active</option>
                                        <option value="0" <?php if($user->user_st == "2" ) {echo 'selected';} ?>>Inactive</option>
                                    </select>
                                    <small class="text-danger"><?php echo form_error('user_st');?></small>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-label" >User type</label>
                                    <select class="form-control" name="user_ty">
                                        <option value=""  <?php if($user->user_ty == ""  ) {echo 'selected';} ?>>select user type</option>
                                        <option value="1" <?php if($user->user_ty == "1" ) {echo 'selected';} ?>>User</option>
                                        <option value="2" <?php if($user->user_ty == "2" ) {echo 'selected';} ?>>Manager</option>
                                    </select>
                                    <small class="text-danger"><?php echo form_error('user_ty');?></small>
                                </td>
                                <td>
                                    <label class="form-label" >is Admin?</label>
                                    <input class="form-control" type="checkbox" name="user_ad" value="<?=$user->user_ad?>">
                                    <small class="text-danger"><?php echo form_error('user_ad');?></small>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2" class="text-center">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </td>
                               
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>