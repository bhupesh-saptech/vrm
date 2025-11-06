
<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 my-5">
                <div class="card my-5">
                    <div class="card-header bg-light">
                        <h5>Login Form</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php include('assets/incld/messages.php'); ?>
                            </div>
                        </div>
                        <form action="login/login" method="POST">
                            <div class="form-group">
                                <label for="">Email ID</label>
                                <input type="text" name="mail_id" class="form-control" placeholder="Mail ID">
                                <small class="text-danger"><?php echo form_error('mail_id');?></small>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="pass_wd" class="form-control" placeholder="Password">
                                <small class="text-danger"><?php echo form_error('pass_wd');?></small>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary btn-block" >Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
