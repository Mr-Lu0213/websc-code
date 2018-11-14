<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php echo $this->fetch('library/seller_html_head.lbi'); ?></head>

<body>
<?php echo $this->fetch('library/seller_header.lbi'); ?>
<div class="ecsc-layout">
    <div class="site wrapper">
		<?php echo $this->fetch('library/seller_menu_left.lbi'); ?>
		<div class="ecsc-layout-right">
            <div class="main-content" id="mainContent">
				<?php echo $this->fetch('library/url_here.lbi'); ?>
				<?php echo $this->fetch('library/seller_menu_tab.lbi'); ?>
				<!-- start payment list -->
                <div class="list-div" id="listDiv">
                <table class="ecsc-default-table mt20">
                	<thead>
                        <tr>
                            <th width="12%" class="tl pl10"><?php echo $this->_var['lang']['shipping_name']; ?></th>
                            <th width="35%" class="tl pl10"><?php echo $this->_var['lang']['shipping_desc']; ?></th>
                            <th width="6%"><?php echo $this->_var['lang']['insure']; ?></th>
                            <th width="6%"><?php echo $this->_var['lang']['support_cod']; ?></th>
							<th width="10%"><?php echo $this->_var['lang']['support_kdn_print']; ?></th>
                            <th width="5%"><?php echo $this->_var['lang']['sort_order']; ?></th>
                            <th width="15%"><?php echo $this->_var['lang']['handler']; ?></th>
                        </tr>
                    </thead>
					<tbody>
                    <?php $_from = $this->_var['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'module');if (count($_from)):
    foreach ($_from AS $this->_var['module']):
?>
                    <?php if (( $this->_var['seller_shopinfo']['ru_id'] > 0 && $this->_var['module']['install'] == 1 && $this->_var['module']['code'] != 'cac' ) || $this->_var['seller_shopinfo']['ru_id'] == 0): ?>
                        <tr>
                            <td class="tl pl10"><?php echo $this->_var['module']['name']; ?></td>
                            <td class="tl pl10"><?php echo $this->_var['module']['desc']; ?></td>
                            <td align="center"><?php echo $this->_var['module']['insure_fee']; ?></td>
                            <td align='center'><?php if ($this->_var['module']['cod'] == 1): ?><?php echo $this->_var['lang']['yes']; ?><?php else: ?><?php echo $this->_var['lang']['no']; ?><?php endif; ?></td>
							<td align="center"><?php if ($this->_var['module']['kdniao_print'] == 1): ?><?php echo $this->_var['lang']['yes']; ?><?php else: ?><?php echo $this->_var['lang']['no']; ?><?php endif; ?></td>
                            <td align="center" valign="top"> <?php if ($this->_var['module']['install'] == 1): ?> <span><?php echo $this->_var['module']['shipping_order']; ?></span> <?php else: ?> &nbsp; <?php endif; ?> </td>
                            <td align="center" nowrap="true">
                                <?php if ($this->_var['module']['install'] == 1): ?>
                                    <?php if ($this->_var['kdniao_account_use'] && $this->_var['module']['kdniao_print'] == 1): ?>
                                        <a href="javascript:void(0);" ectype="account_setting" data-id="<?php echo $this->_var['module']['id']; ?>" data-code="<?php echo $this->_var['module']['code']; ?>"><?php echo $this->_var['lang']['kuaidiniao_set']; ?></a>
                                    <?php endif; ?>
                                    <a href="shipping.php?act=edit_print_template&shipping=<?php echo $this->_var['module']['id']; ?>"><?php echo $this->_var['lang']['shipping_print_edit']; ?></a>
                                <?php else: ?>
                                    <?php echo $this->_var['lang']['not_enabled']; ?>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php endforeach; else: ?>
                    	<tr><td class="no-records" colspan="11"><?php echo $this->_var['lang']['no_records']; ?>&nbsp;&nbsp;<?php echo $this->_var['lang']['please_complete']; ?><a href="index.php?act=merchants_first"><?php echo $this->_var['lang']['01_merchants_basic_info']; ?></a></td></tr>
                    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
               		</tbody>
                </table>
        		</div>
        	</div>
    	</div>
	</div>
</div>
<!-- end payment list -->

<?php echo $this->fetch('library/seller_footer.lbi'); ?>
<script type="Text/Javascript" language="JavaScript">
<!--


onload = function()
{
    // 开始检查订单
    startCheckOrder();
}

//-->
</script>

    <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.purebox.js')); ?>
    <script type="text/javascript">
    //帐号设置
    $(document).on('click', "*[ectype='account_setting']", function(){
        var id = $(this).data('id');
        $.jqueryAjax('shipping.php', 'act=account_setting&id='+id, function(data){
            var content = data.content;
            pb({
                id:"setting_dialog",
                title:zhanghu_set,
                width:500,
                content:content,
                ok_title:jl_determine,
                cl_title:jl_cancel,
                drag:true,
                foot:true,
                onOk:function(){
                    save_account();
                }
            });     
        })
    })
    //保存设置
    function save_account(){
        var obj = $("#setting_dialog");
    var this_data = obj.find("form").serialize();
        $.jqueryAjax('shipping.php', this_data, function(data){
      pbDialog(set_success, '', 1);
        }, 'post')
    }

  //帐号申请
  $(document).on('click', "*[ectype='account_apply']", function(){
    var id = $(this).data('id');
    $.jqueryAjax('shipping.php', 'act=account_apply&id='+id, function(data){
      var content = data.content;
      pb({
        id:"apply_dialog",
        title:customer_apply,
        width:700,
        content:content,
        ok_title:jl_determine,
        cl_title:jl_cancel,
        drag:true,
        foot:true,
        onOk:function(){
          submit_account();
        }
      });   
    })
  })
  //提交申请
  function submit_account(){
    var obj = $("#apply_dialog");
    var this_data = obj.find("form").serialize();
    $.jqueryAjax('shipping.php', this_data, function(data){
      if(data.error == 1){
        pbDialog(subimt_apply_fail, data.message, 0);
      }else{
        pbDialog(subimt_apply_success, '', 1);
      }
    }, 'post')
  }
    </script>   
</body>
</html>