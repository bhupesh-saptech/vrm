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
                                    <label class="form-label" >First Name</label>
                                    <input class="form-control" type="text" name="first_name" >
                                    <small><?php echo form_error('first_name');?></small>
                                </td>
                                <td>
                                    <label class="form-label">Last Name</label>
                                    <input class="form-control" type="text" name="last_name" >
                                    <small><?php echo form_error('last_name');?></small>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-label">Email ID</label>
                                    <input class="form-control" type="email" name="mail_id" autocomplete="off" >
                                    <small><?php echo form_error('mail_id');?></small>
                                </td>
                                <td>
                                    <label class="form-label">City</label>
                                    <input class="form-control" type="text" name="city" >
                                    <small><?php echo form_error('city');?></small>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="form-label" >Password</label>
                                    <input class="form-control" type="password" name="password" autocomplete="new-password">
                                    <small><?php echo form_error('password');?></small>
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