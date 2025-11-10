<h1 class="text-center">File Upload Utility</h1>
<div class="container">
    <form action="files/do_upload" method="post" enctype="multipart/form-data">
        <input type="file" name="img_file" class="form-control">
        <small class="text-danger"><?=form_error('file')?></small>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>
</div>