<?php if ($this->_var['regions']): ?>
<?php $_from = $this->_var['regions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('id', 'region');if (count($_from)):
    foreach ($_from AS $this->_var['id'] => $this->_var['region']):
?>
<div class="checkbox_item">
	<input type="checkbox" name="regions[]" class="ui-checkbox" value="<?php echo $this->_var['region']['region_id']; ?>" checked="true" id="checkbox_<?php echo $this->_var['region']['region_id']; ?>" />
    <label class="ui-label" for="checkbox_<?php echo $this->_var['region']['region_id']; ?>"><?php echo $this->_var['region']['region_name']; ?></label>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php else: ?>
<div class="notic bf100 mt5 red">
	<?php echo $this->_var['lang']['please_add_area_one_by_one']; ?>
</div>
<?php endif; ?>