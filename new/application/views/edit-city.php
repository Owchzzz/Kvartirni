<form class="form-horizontal" action="/new/city/saveedit.html?id=<?php echo $this->input->get('id');?>" method="post">
<fieldset>

<!-- Form Name -->
<legend>City Edit</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label">Latin Name</label>
  <div class="controls">
    <input id="latname" name="latname" type="text" placeholder="" class="input-xlarge" value="<?php echo $latname?>" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label">National Name</label>
  <div class="controls">
    <input id="name" name="name" type="text" placeholder="" value="<?php echo $cityname?>" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label">Country</label>
  <div class="controls">
    <select id="country" name="country" class="input-xlarge">
    <?php echo $output;?>
    </select>
  </div>
</div>

<input type="submit" value="submit">
</fieldset>
</form>
