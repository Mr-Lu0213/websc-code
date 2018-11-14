<?php if ($this->_var['history_info']): ?>
<div class="tbar-panel-main" ectype="tbpl-main">
    <div class="tbar-panel-content" data-height="48" ectype="tbpl-content">
        <div class="history-wrap">
            <ul>
                <?php $_from = $this->_var['history_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                <li>
                    <a href="<?php echo $this->_var['goods']['url']; ?>" class="img-wrap" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" width="100" height="100" /></a>
                    <a href="<?php echo $this->_var['goods']['url']; ?>" class="add-cart-button" target="_blank"><?php echo $this->_var['lang']['btn_add_to_cart']; ?></a>
                    <a href="<?php echo $this->_var['goods']['url']; ?>" class="price" target="_blank"><?php if ($this->_var['goods']['is_promote']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></a>
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
            <a href="history_list.php" class="follow-bottom-more"><?php echo $this->_var['lang']['see_more']; ?>>></a>
        </div>
    </div>
</div>
<?php endif; ?>