<h1 class="text-center">File Upload Utility</h1>
<div class="container">
    <?=form_open_multipart('files/upload') ?>
        <?= form_upload(['name'=>'file']) ?>
    </form>
</div>