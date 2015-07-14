<html>
    <head>
        
    </head>
    <body>
    
        
        <?php echo $error;?>

<?php echo form_open_multipart('/new/test/uploadimgs');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

<iframe name="leiframe" width="200" height="200"></iframe>
    </body>
</html>
