<h1>Upload file</h1>
<form method="post" action="<?php echo route('categories.upload'); ?>" 
enctype="multipart/form-data">
    <div>
        <input type="file" name="photo" id=""   >
    </div>
    <?php echo csrf_field();?>
    <!-- <input type="hidden" name="_token" value="<?php echo csrf_token() ;?>" > -->
    <button type="submit">Upload</button>
</form>