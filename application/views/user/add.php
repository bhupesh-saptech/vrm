<div class="py-5">
    <div class="contrainer">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Register</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('register')?>" autocomplete="off" >
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <label class="form-label">Email ID</label>
                                    <input class="form-control" type="email" name="mail_id" autocomplete="off" >
                                    <small><?php echo form_error('mail_id');?></small>
                                </td>
                                <td>
                                    <label class="form-label" >user Name</label>
                                    <input class="form-control" type="text" name="user_nm" >
                                    <small><?php echo form_error('user_nm');?></small>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-label" >Password</label>
                                    <input class="form-control" type="password" name="pass_wd" autocomplete="new-password">
                                    <small><?php echo form_error('pass_wd');?></small>
                                </td>
                                <td>
                                    <label class="form-label" >Confirm Password</label>
                                    <input class="form-control" type="password" name="cpass_wd" >
                                    <small><?php echo form_error('cpass_wd');?></small>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <button class="btn btn-primary" type="submit" name="submit" >Submit</button>
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