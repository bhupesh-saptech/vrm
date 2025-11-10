<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form action="<?=base_url('email/send')?>" method="post">
                <label  class="form-label">to address</label>
                <input  type="email"    name="to_addr"  class="form-control">
                <small class="text-danger"><?php echo form_error('to_addr');?></small>
                <label  class="form-label">Subject</label>
                <input  type="text"     name="subject"  class="form-control">
                <small class="text-danger"><?php echo form_error('subject');?></small>
                <label  class="form-label">Message</label>
                <textarea name="message"  class="form-control"></textarea>
                <small class="text-danger"><?php echo form_error('message');?></small>
                <button type="submit"   name="send"     class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
    </div>
</div> 