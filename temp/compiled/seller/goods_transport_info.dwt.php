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
                <div class="ecsc-form-goods">
                <form action="goods_transport.php" method="post" name="theForm" enctype="multipart/form-data" id="goods_transport_form" onsubmit="return validate()">
                	<div class="wrapper-list border1">
                        <dl>
                            <dt><?php echo $this->_var['lang']['lab_freight_type']; ?>：</dt>
                            <dd>
                                <div class="checkbox_items">
                                    <div class="checkbox_item">
                                        <input type="radio" name="freight_type" class="ui-radio" id="freight_type0" onclick="check_type(0)" value="0" <?php if ($this->_var['transport_info']['freight_type'] != 1): ?>checked<?php endif; ?> autocomplete="off" />
                                        <label for="freight_type0" class="ui-radio-label"><?php echo $this->_var['lang']['freight_type']['one']; ?></label>
                                    </div>
                                    <div class="checkbox_item">
                                        <input type="radio" name="freight_type" class="ui-radio" id="freight_type2" value="1" onclick="check_type(1)" <?php if ($this->_var['transport_info']['freight_type'] == 1): ?>checked<?php endif; ?> autocomplete="off" />
                                        <label for="freight_type2" class="ui-radio-label"><?php echo $this->_var['lang']['freight_type']['two']; ?></label>
                                    </div>
                                </div>
                            </dd>
                        </dl>
                    	<dl>
                        	<dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['title']; ?>：</dt>
                            <dd>
                            	<input type="text" name="title" class="text" autocomplete="off" value="<?php echo htmlspecialchars($this->_var['transport_info']['title']); ?>" />
                            	<div class="form_prompt"></div>
                            </dd>
                        </dl>
                        <dl>
                        	<dt><?php echo $this->_var['lang']['shipping_title']; ?>：</dt>
                            <dd>
                            	<input type="text" name="shipping_title" class="text" autocomplete="off" value="<?php echo htmlspecialchars($this->_var['transport_info']['shipping_title']); ?>" />
                                <div class="notic"><?php echo $this->_var['lang']['notice_show_in_goods_info']; ?></div>
                            </dd>
                        </dl>
                        <div id="Fixed_freight" class="<?php if ($this->_var['transport_info']['freight_type'] != 0): ?>hide<?php endif; ?>">
                            <dl>
                                <dt><?php echo $this->_var['lang']['transport_type_name']; ?>：</dt>
                                <dd>
                                    <div class="checkbox_items">
                                        <div class="checkbox_item">
                                            <input name="type" type="radio" class="ui-radio" value="0" id="type_0" <?php if ($this->_var['transport_info']['type'] == 0): ?>checked<?php endif; ?> autocomplete="off" />
                                            <label for="type_0" class="ui-radio-label"><?php echo $this->_var['lang']['transport_type_off']; ?></label>
                                        </div>
                                        <div class="checkbox_item">
                                            <input name="type" type="radio" class="ui-radio" value="1" id="type_1" <?php if ($this->_var['transport_info']['type'] == 1): ?>checked<?php endif; ?> autocomplete="off" />
                                            <label for="type_1" class="ui-radio-label"><?php echo $this->_var['lang']['transport_type_on']; ?></label>
                                        </div>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt><?php echo $this->_var['lang']['free_money']; ?>：</dt>
                                <dd>
                                    <div class="checkbox_items">
                                        <input name="free_money" value="<?php echo empty($this->_var['transport_info']['free_money']) ? '0.00' : $this->_var['transport_info']['free_money']; ?>" type="text" class="text w150" />
                                    </div>
                                </dd>
                            </dl>
                            <dl class="notBg">
                                <dt><?php echo $this->_var['lang']['area_id']; ?>：</dt>
                                <dd>
                                    <div class="ecsc-order-contnet m0" ectype="transportArea"><?php echo $this->fetch('library/goods_transport_area.lbi'); ?></div>
                                    <input type="button" value="<?php echo $this->_var['lang']['add_area']; ?>" class="sc-btn btn35 sc-blueBg-btn" data-role="add_area" ectype="add_area">
                                </dd>
                            </dl>
                            <dl class="notBg">
                                <dt><?php echo $this->_var['lang']['shipping_id']; ?>：</dt>
                                <dd>
                                    <div class="ecsc-order-contnet m0" ectype="transportExpress"><?php echo $this->fetch('library/goods_transport_express.lbi'); ?></div>
                                    <input type="button" value="<?php echo $this->_var['lang']['add_express']; ?>" class="sc-btn btn35 sc-blueBg-btn" data-role="add_express" ectype="add_express">
                                </dd>
                            </dl>
                        </div>
                        <div id="Template_freight" class="<?php if ($this->_var['transport_info']['freight_type'] == 0): ?>hide<?php endif; ?>">
                         	<dl class="notBg">
                                <dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['lab_goods_shipping']; ?>：</dt>
                                <dd>
                                    <div id="shipping_id" class="imitate_select select_w320">
                                        <div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
                                        <ul>
                                            <?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');if (count($_from)):
    foreach ($_from AS $this->_var['shipping']):
?>
                                            <li><a href="javascript:;" data-value="<?php echo $this->_var['shipping']['shipping_id']; ?>" class="ftx-01"><?php echo $this->_var['shipping']['shipping_name']; ?></a></li>
                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </ul>
                                        <input name="shipping_id" type="hidden" value="<?php echo $this->_var['transport_info']['shipping_id']; ?>" id="shipping_id_val" autocomplete="off" />
                                    </div>
                                    <div class="form_prompt"></div>
                                </dd>
                            </dl>
                            <div id="shipping_com">
                            	<dl class="notBg">
                                    <dt><?php echo $this->_var['lang']['lab_goods_freighttemp']; ?>：</dt>
                                    <dd id="transport_tpl">
                                       <?php echo $this->fetch('library/goods_transport_tpl.lbi'); ?>
                                    </dd>
                            	</dl>
                            </div>
                        </div>
                        <dl class="button_info">
                        	<dt>&nbsp;</dt>
                            <dd>
                            	<input type="hidden" name="tid" value="<?php echo empty($this->_var['tid']) ? '0' : $this->_var['tid']; ?>">
                                <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>">					   
                                <input name="submit" type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="sc-btn btn35 sc-blueBg-btn" id="submitBtn">
                            </dd>
                        </dl>
                    </div>
                </form>
                </div>
                </div>
                <!--end-->
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/seller_footer.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.purebox.js')); ?>
<script type="text/javascript">
	$(function(){
		//表单验证
		$("#submitBtn").click(function(){
			if($("#goods_transport_form").valid()){
				$("#goods_transport_form").submit();
			}
		});
		
		$('#goods_transport_form').validate({
			errorPlacement:function(error, element){
				var error_div = element.parents('dl').find('div.form_prompt');
				//element.parents('div.label_value').find(".notic").hide();
				error_div.append(error);
			},
			rules:{
				title :{
					required : true
				}
			},
			messages:{
				title:{
					 required : '<i class="icon icon-exclamation-sign"></i>'+jl_title_not_null
				}
			}			
		});
	});
	
	//运费模板
	function freightTemplate(){
		var doc = $(document),
			tid = $("input[name='tid']").val();
			id = 0;
		/***************************模板类型 -> 快递模板*************************/
		//选择配送方式
		$.divselect("#shipping_id","#shipping_id_val",function(obj){
			var val = obj.data("value"),
				name  = obj.html(),
				has_shipping = false;
				
			dialog_shipping(val, id);
		});
		
		//编辑运费模板内的快递
		doc.on("click","*[ectype='edit_shipping']",function(){
			var val = $(this).parents('tr').data('shipping_id');
			var id = $(this).data('id');
			dialog_shipping(val, id);
		});
		
		//删除运费模板内的快递
		doc.on("click","*[ectype='drop_shipping']",function(){
			var t = $(this),
			 	id = t.data('id');
				
			if(confirm(jl_sure_delete_template)){
				$.jqueryAjax('goods_transport.php', 'act=drop_shipping&tid='+tid + "&id=" + id, function(data){
					$("#transport_tpl").html(data.content);
				});
			}
		});
		
		//添加地区
		doc.on("click","*[ectype='add_shipping_area']",function(){
			var val = $(this).parents('tr').data('shipping_id');
			dialog_shipping(val, id);
		});
	
		/***************************模板类型 -> 自定义 *************************/
		//添加地区
		doc.on("click","*[ectype='add_area']",function(){
			$.jqueryAjax('goods_transport.php', 'act=add_area&tid='+tid, function(data){
				$("*[ectype='transportArea']").html(data.content);
			});
		});
		
		//编辑地区	
		doc.on("click","*[ectype='edit_area']",function(){
			var id = $(this).parents('tr').find('input[name=id]').val();
			$.jqueryAjax('goods_transport.php', 'act=edit_area&id='+id, function(data){
				var content = data.content;
				pb({
					id:"area_dialog",
					title:jl_select_region,
					width:900,
					content:content,
					ok_title:jl_determine,
					cl_title:jl_cancel,
					drag:false,
					foot:true,
					cl_cBtn:true,
					onOk:function(){save_area();}
				});			
			})
		});
		
		//删除地区
		doc.on("click","*[ectype='drop_area']",function(){
			var id = $(this).parents('tr').find('input[name=id]').val();
			$.jqueryAjax('goods_transport.php', 'act=drop_area&id='+id, function(data){
				$("*[ectype='transportArea']").html(data.content);
			});
		});
		
		//展开地区二级
		doc.on("click",".area-province i", function(){
			var area_city = $(this).siblings(".area-city");
			if(area_city.hasClass("hide")){
				$(this).parents(".area-province").find(".area-city").addClass("hide");
				area_city.removeClass("hide");
				$(this).removeClass("icon-angle-down").addClass("icon-angle-up");
			}else{
				area_city.addClass("hide");
				$(this).removeClass("icon-angle-up").addClass("icon-angle-down");
			}
		});
		
		//选中省份
		doc.on("click","input[name=province]", function(){
			if($(this).prop('checked')){
				$(this).parents('li:first').find('ul.area-city input:enabled').prop('checked', true);
			}else{
				$(this).parents('li:first').find('ul.area-city input:enabled').prop('checked', false);
			}
			var child_num = $(this).parents('li:first').find('ul.area-city input:enabled:checked').length;
			var child_obj = $(this).siblings(".ui-label").find('[data-role=child_num]');
			change_child_num(child_obj, child_num);
		});
		
		//选中城市
		doc.on("click","input[name=city]", function(){
			var child_num = $(this).parents('ul.area-city').find('input:enabled:checked').length;
			var child_obj = $(this).parents('.area-city').siblings(".ui-label").find('[data-role=child_num]');
			change_child_num(child_obj, child_num);
		});
		
		//添加快递
		doc.on("click","*[ectype='add_express']", function(){
			var tid = $("input[name='tid']").val();
			$.jqueryAjax('goods_transport.php', 'act=add_express&tid='+tid, function(data){
				$("[ectype='transportExpress']").html(data.content);
			})
		});
		
		//删除快递
		doc.on("click","*[ectype='drop_express']", function(){
			var id = $(this).parents('tr').find('input[name=id]').val();
			$.jqueryAjax('goods_transport.php', 'act=drop_express&id='+id, function(data){
				$("[ectype='transportExpress']").html(data.content);
			})
		});
		
		//编辑快递
		doc.on("click","*[ectype='edit_express']", function(){
			var id = $(this).parents('tr').find('input[name=id]').val();
			$.jqueryAjax('goods_transport.php', 'act=edit_express&id='+id, function(data){
				var content = data.content;
				pb({
					id:"express_dialog",
					title:jl_select_express,
					width:900,
					content:content,
					ok_title:jl_determine,
					cl_title:jl_cancel,
					drag:false,
					foot:true,
					cl_cBtn:true,
					onOk:function(){save_express();}
				});			
			})
		});
		
		//全选地区
		doc.on("click","input[name=all]",function(){
			if($(this).prop('checked')){
				$(this).parents('.area-province,.transport-express').find('input[type=checkbox]').prop('checked', true);
			}else{
				$(this).parents('.area-province,.transport-express').find('input[type=checkbox]').prop('checked', false);
			}
		});
		
		//点击空白处
		doc.click(function(e){
			if(e.target.className != "area-city" && !$(e.target).parents("ul").is(".area-city") && e.target.className != "icon icon-angle-up"){
				$(".area-city").addClass("hide");
				$(".area-province").find("i").removeClass("icon-angle-up").addClass("icon-angle-down");
			}
		});
		
		/*************************************方法**********************************/
		//快递模板类型切换
		check_type = function(type){
			if(type == 0){
				$("#Template_freight").hide();
				$("#Fixed_freight").show();
			}else{
				$("#Template_freight").show();
				$("#Fixed_freight").hide();
			}
		}
		
		//统计数量
		change_child_num = function(obj, num){
			obj.html(obj.html().replace(/\d+/, num));
			if(num > 0){
				obj.removeClass('hide');
				obj.parents('.ui-label').siblings('input[name=province]').prop('checked', true);
			}else{
				obj.addClass('hide');
				obj.parents('.ui-label').siblings('input[name=province]').prop('checked', false);
			}
		}
		
		//自定义编辑配送区域保存
		save_area = function(){
			var id = $('.area-province').data('id');
			var province = new Array();
			var city = new Array();
			//省份
			$('.area-province').find("input[name=province]:enabled:checked").each(function(){
				province.push($(this).val());
			})
			//城市
			$('.area-province').find("input[name=city]:enabled:checked").each(function(){
				city.push($(this).val());
			})
			province = province.join(',');
			city = city.join(',');
			$.jqueryAjax('goods_transport.php', 'act=save_area&id='+id+'&top_area_id='+province+'&area_id='+city, function(data){
				$("*[ectype='transportArea']").html(data.content);
			});
		}
	
		//自定义模式编辑快递方式保存	
		save_express = function(){
			var id = $('.transport-express').data('id');
			var express = new Array();
			$('.transport-express').find("input[name=shipping]:enabled:checked").each(function(){
				express.push($(this).val());
			})
			express = express.join(',');
			$.jqueryAjax('goods_transport.php', 'act=save_express&id='+id+'&shipping_id='+express, function(data){
				$("[ectype='transportExpress']").html(data.content);
			});
		}
		
		//快递模板 运费模板编辑
		dialog_shipping = function(val, id){
			$.jqueryAjax('goods_transport.php', 'act=get_shipping_tem&shipping_id='+val + "&id=" + id + "&tid=" + tid, function(data){
				var content = data.content;
				pb({
					id:"area_dialog",
					title:jl_edit_freight_tpl,
					width:900,
					content:content,
					ok_title:jl_determine,
					cl_title:jl_cancel,
					drag:false,
					foot:true,
					cl_cBtn:true,
					onOk:function(){
						var actionUrl = "goods_transport.php?act=add_shipping_tpl";
						$("form[name='shipping_tplForm']").ajaxSubmit({
							type: "POST",
							dataType: "JSON",
							url: actionUrl,
							data: {"action": "TemporaryImage"},
							success: function (data) {
								$("#transport_tpl").html(data.content);
								$(".tpl_region").perfectScrollbar("destroy");
								$(".tpl_region").perfectScrollbar();
							},
							async: true
						});
					}
				});
			});
		}
		
		$(".tpl_region").perfectScrollbar("destroy");
		$(".tpl_region").perfectScrollbar();
	}
	freightTemplate();
</script>
</body>
</html>