<form class="form-horizontal" action="/new/country/saveedit.html?id=<?php echo $this->input->get('id');?>" method="post">
<fieldset>

<!-- Form Name -->
<legend>Edit Country</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label">Name</label>
  <div class="controls">
    <input id="name" name="name" type="text" placeholder="" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label">International Name</label>
  <div class="controls">
    <input id="intername" name="intername" type="text" placeholder="" class="input-xlarge" required="">
    
  </div>
</div>

</fieldset>
</form>
