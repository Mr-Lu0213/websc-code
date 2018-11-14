<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php echo $this->fetch('library/seller_html_head.lbi'); ?></head>

<body>
<?php echo $this->fetch('library/seller_header.lbi'); ?>
<div class="ecsc-layout">
    <div class="site wrapper">
		<?php echo $this->fetch('library/seller_menu_user.lbi'); ?>
        <div class="ecsc-layout-right">
            <div class="main-content" id="mainContent">
                <div class="top-container">
                    <div class="basic-info">
                    	<div class="ecsc-seller-info">
                        	<div class="store-logo"><img src="<?php echo $this->_var['seller_info']['logo_thumb']; ?>" /></div>
                            <div class="store-info">
                            	<div class="seller-name"><?php echo $this->_var['seller_info']['shop_name']; ?></div>
                                <div class="seller-desc">
                                	<div class="item">
                                    	<span><em><?php echo $this->_var['lang']['label_user_name']; ?></em><strong><?php echo $this->_var['seller_info']['user_name']; ?></strong></span>
                                        <span class="store-name"><em><?php echo $this->_var['lang']['label_shop_name']; ?></em><strong><a href="../merchants_store.php?merchant_id=<?php echo $this->_var['ru_id']; ?>" target="_blank"><?php echo $this->_var['seller_info']['shopName']; ?></a></strong></span>
                                    </div>
                                    <div class="item">
                                    	<span><em><?php echo $this->_var['lang']['label_manage_power']; ?></em><strong><?php echo $this->_var['lang']['manager']; ?></strong></span>
                                        <span><em><?php echo $this->_var['lang']['label_last_login']; ?></em><strong><?php echo $this->_var['seller_info']['last_login']; ?></strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-items">
                                <ul>
                                    <li><a href="order.php?act=list&shipped_deal=shipped_deal"><?php echo $this->_var['lang']['wait_process_order']; ?><em>(<?php echo $this->_var['order']['shipped_deal']; ?>)</em></a></li>
                                    <li><a href="favourable.php?act=list"><?php echo $this->_var['lang']['now_promotion_act']; ?><em>(<?php echo $this->_var['favourable_count']; ?>)</em></a></li>
                                    <li><a href="favourable.php?act=list&fav_dateout=1"><?php echo $this->_var['lang']['coming_expire_act']; ?><em>(<?php echo $this->_var['favourable_dateout_count']; ?>)</em></a></li>
                                    <li><a href="order.php?act=return_list"><?php echo $this->_var['lang']['return_exchange_order']; ?><em>(<?php echo $this->_var['order']['return_number']; ?>)</em></a></li>
                                    <li><a href="comment_manage.php?act=list&reply=1"><?php echo $this->_var['lang']['wait_goods_reply_ask']; ?><em>(<?php echo $this->_var['reply_count']; ?>)</em></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="detail-rate">
                        	<div class="title"><?php echo $this->_var['lang']['shop_dynamic_rank']; ?></div>
                            <ul>
                            	<li>
                                	<div class="canvas" data-per="80">
                                        <div class="canvas_wrap">
                                            <div class="circle">
                                                <div class="circle_item circle_left"></div>
                                                <div class="circle_item circle_right wth0"></div>
                                            </div>
                                            <div class="canvas_num"><?php echo $this->_var['merch_cmt']['cmt']['commentRank']['zconments']['score']; ?><?php echo $this->_var['lang']['minute']; ?></div>
                                        </div>
                                    </div>
                                    <span><?php echo $this->_var['lang']['desc_is_good']; ?></span>
                                </li>
                                <li>
                                	<div class="canvas" data-per="70">
                                        <div class="canvas_wrap">
                                            <div class="circle">
                                                <div class="circle_item circle_left"></div>
                                                <div class="circle_item circle_right wth0"></div>
                                            </div>
                                            <div class="canvas_num"><?php echo $this->_var['merch_cmt']['cmt']['commentServer']['zconments']['score']; ?><?php echo $this->_var['lang']['minute']; ?></div>
                                        </div>
                                    </div>
                                    <span><?php echo $this->_var['lang']['service_attitude']; ?></span>
                                </li>
                                <li>
                                	<div class="canvas" data-per="83.4">
                                        <div class="canvas_wrap">
                                            <div class="circle">
                                                <div class="circle_item circle_left"></div>
                                                <div class="circle_item circle_right wth0"></div>
                                            </div>
                                            <div class="canvas_num"><?php echo $this->_var['merch_cmt']['cmt']['commentDelivery']['zconments']['score']; ?><?php echo $this->_var['lang']['minute']; ?></div>
                                        </div>
                                    </div>
                                    <span><?php echo $this->_var['lang']['delivery_speed']; ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="seller-cont">
                    <div class="container_left">
                        <div class="container type-a type-one">
                            <div class="hd">
                                <h3><?php echo $this->_var['lang']['shop_and_goods_tip']; ?></h3>
                            </div>
                            <div class="content">
                                <ul>
                                    <li><a href="goods.php?act=list&is_on_sale=1" target="_blank"><?php echo $this->_var['lang']['shop_and_goods_tip_1']; ?><em>(<?php echo $this->_var['seller_goods_info']['is_sell']; ?>)</em></a></li>
                                    <li><a href="goods.php?act=trash" target="_blank"><?php echo $this->_var['lang']['shop_and_goods_tip_2']; ?><em>(<?php echo $this->_var['seller_goods_info']['is_delete']; ?>)</em></a></li>
                                    <li><a href="goods.php?act=list&is_on_sale=0" target="_blank"><?php echo $this->_var['lang']['shop_and_goods_tip_3']; ?><em>(<?php echo $this->_var['seller_goods_info']['is_on_sale']; ?>)</em></a></li>
                                    <li><a href="goods.php?act=list&stock_warning=1" target="_blank"><?php echo $this->_var['lang']['shop_and_goods_tip_4']; ?><em>(<?php echo $this->_var['seller_goods_info']['is_warn']; ?>)</em></a></li>
                                    <li><a href="goods.php?act=list&intro_type=store_new" target="_blank"><?php echo $this->_var['lang']['shop_and_goods_tip_5']; ?><em>(<?php echo $this->_var['new_count']; ?>)</em></a></li>
                                    <li><a href="goods.php?act=list&intro_type=store_best" target="_blank"><?php echo $this->_var['lang']['shop_and_goods_tip_6']; ?><em>(<?php echo $this->_var['best_count']; ?>)</em></a></li>
                                    <li><a href="goods.php?act=list&intro_type=store_hot" target="_blank"><?php echo $this->_var['lang']['shop_and_goods_tip_7']; ?><em>(<?php echo $this->_var['hot_count']; ?>)</em></a></li>
                                    <li><a href="goods.php?act=list&intro_type=is_promote" target="_blank"><?php echo $this->_var['lang']['shop_and_goods_tip_8']; ?><em>(<?php echo $this->_var['promotion_count']; ?>)</em></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="container type-a type-two">
                            <div class="hd">
                                <h3><?php echo $this->_var['lang']['transaction_tip']; ?></h3>
                            </div>
                            <div class="content">
                                <ul>
                                	<li><a href="order.php?act=list&serch_type=0" target="_blank"><?php echo $this->_var['lang']['transaction_tip_1']; ?><em>(<?php echo $this->_var['order']['unconfirmed']; ?>)</em></a></li>
                                    <li><a href="order.php?act=list&serch_type=100" target="_blank"><?php echo $this->_var['lang']['transaction_tip_2']; ?><em>(<?php echo $this->_var['order']['await_pay']; ?>)</em></a></li>
                                    <li><a href="order.php?act=list&serch_type=101" target="_blank"><?php echo $this->_var['lang']['transaction_tip_3']; ?><em>(<?php echo $this->_var['order']['await_ship']; ?>)</em></a></li>
                                    <li><a href="order.php?act=list&serch_type=102" target="_blank"><?php echo $this->_var['lang']['transaction_tip_4']; ?><em>(<?php echo $this->_var['order']['finished']; ?>)</em></a></li>
                                    <li><a href="goods_booking.php?act=list_all" target="_blank"><?php echo $this->_var['lang']['transaction_tip_5']; ?><em>(<?php echo $this->_var['booking_goods']; ?>)</em></a></li>
                                    <li><a href="goods.php?act=no_comment" target="_blank"><?php echo $this->_var['lang']['transaction_tip_6']; ?><em>(<?php echo $this->_var['no_comment']; ?>)</em></a></li>
                                    <?php if ($this->_var['complaint_count'] > 0): ?>
                                    <li><a href="complaint.php?act=list" target="_blank"><?php echo $this->_var['lang']['transaction_tip_7']; ?><em>(<?php echo $this->_var['complaint_count']; ?>)</em></a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="container_right">
                        <div class="container type-b type-b-one">
                            <div class="hd">
                                <h3><?php echo $this->_var['lang']['seller_help']; ?></h3>
                            </div>
                            <div class="content">
                                <ul>
                                    <?php $_from = $this->_var['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vo');if (count($_from)):
    foreach ($_from AS $this->_var['vo']):
?>
                                    <li><a target="_blank" href="../article.php?id=<?php echo $this->_var['vo']['article_id']; ?>" title="<?php echo $this->_var['vo']['title']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="container type-b type-b-two">
                            <div class="hd">
                                <h3><?php echo $this->_var['lang']['contact_way']; ?></h3>
                            </div>
                            <div class="content">
                                <ul>
                                    <li><?php echo $this->_var['lang']['label_telephone']; ?><?php echo $this->_var['seller_info']['kf_tel']; ?></li>
                                    <li><?php echo $this->_var['lang']['lable_email']; ?><?php echo $this->_var['seller_info']['seller_email']; ?></li>
                                    <li><?php echo $this->_var['lang']['lable_address']; ?><?php echo $this->_var['seller_info']['shop_address']; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="seller-cont">
                	<div class="hd">
                        <h3><?php echo $this->_var['lang']['shop_data']; ?><font style="font-size:12px; color:#7d7d7d"><?php echo $this->_var['lang']['deal_is_real']; ?></font></h3>
                    </div>
                    <div class="main-left">
                    	<div class="container">
                            <div class="container-left"><i class="shop-icon shop-icon-pc"></i></div>
                            <div class="container-right">
                                <ul>
                                    <li><?php echo $this->_var['lang']['shop_data_1']; ?><p><?php echo empty($this->_var['today_sales']['format_sales']) ? '0' : $this->_var['today_sales']['format_sales']; ?></p></li>
                                    <li><?php echo $this->_var['lang']['shop_data_2']; ?><p><?php echo empty($this->_var['today_sales']['format_count']) ? '0' : $this->_var['today_sales']['format_count']; ?></p></li>
                                    <li><?php echo $this->_var['lang']['shop_data_3']; ?><p><?php echo empty($this->_var['today_sub_order']['sub_order']) ? '0' : $this->_var['today_sub_order']['sub_order']; ?></p></li>
                                </ul>
                                <ul>
                                    <li><?php echo $this->_var['lang']['shop_data_4']; ?><p><?php echo empty($this->_var['yes_sales']['format_sales']) ? '0' : $this->_var['yes_sales']['format_sales']; ?></p></li>
                                    <li><?php echo $this->_var['lang']['shop_data_5']; ?><p><?php echo empty($this->_var['yes_sales']['format_count']) ? '0' : $this->_var['yes_sales']['format_count']; ?></p></li>
                                    <li><?php echo $this->_var['lang']['shop_data_6']; ?><p><?php echo empty($this->_var['yes_sub_order']['sub_order']) ? '0' : $this->_var['yes_sub_order']['sub_order']; ?></p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="container">
                            <div class="container-left"><i class="shop-icon shop-icon-move"></i></div>
                            <div class="container-right">
                                <ul>
                                    <li><?php echo $this->_var['lang']['shop_data_7']; ?><p><?php echo empty($this->_var['today_move_sales']['format_sales']) ? '0' : $this->_var['today_move_sales']['format_sales']; ?></p></li>
                                    <li><?php echo $this->_var['lang']['shop_data_8']; ?><p><?php echo empty($this->_var['today_move_sales']['format_count']) ? '0' : $this->_var['today_move_sales']['format_count']; ?></p></li>
                                    <li><?php echo $this->_var['lang']['shop_data_9']; ?><p><?php echo empty($this->_var['today_move_sub_order']['sub_order']) ? '0' : $this->_var['today_move_sub_order']['sub_order']; ?></p></li>
                                </ul>
                                <ul>
                                    <li><?php echo $this->_var['lang']['shop_data_10']; ?><p><?php echo empty($this->_var['yes_move_sales']['format_sales']) ? '0' : $this->_var['yes_move_sales']['format_sales']; ?></p></li>
                                    <li><?php echo $this->_var['lang']['shop_data_11']; ?><p><?php echo empty($this->_var['yes_move_sales']['format_count']) ? '0' : $this->_var['yes_move_sales']['format_count']; ?></p></li>
                                    <li><?php echo $this->_var['lang']['shop_data_12']; ?><p><?php echo empty($this->_var['yes_move_sub_order']['sub_order']) ? '0' : $this->_var['yes_move_sub_order']['sub_order']; ?></p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                	<div class="main-right">
                    	<?php echo $this->_var['lang']['today_turnover']; ?><p><?php echo empty($this->_var['all_count']) ? '0' : $this->_var['all_count']; ?></p>
                        <?php echo $this->_var['lang']['today_shop_deal_rate']; ?><p><?php echo $this->_var['cj']; ?></p>
                    </div>
                </div>
                <div class="rank-container">
                	<div class="container type-a">
                        <div class="hd">
                            <h3><?php echo $this->_var['lang']['single_sale_rank']; ?></h3>
                        </div>
                        <div class="content">
                            <table class="ecsc-default-table rank">
                            <thead>
                                <tr>
                                    <th width="20%" class="frist"><?php echo $this->_var['lang']['rank_name']; ?></th>
                                    <th width="70%" class="tl"><?php echo $this->_var['lang']['goods_info']; ?></th>
                                    <th width="10%"><?php echo $this->_var['lang']['sales_piece']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $_from = $this->_var['goods_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vo');$this->_foreach['goods_info'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_info']['total'] > 0):
    foreach ($_from AS $this->_var['vo']):
        $this->_foreach['goods_info']['iteration']++;
?>
                            <tr class="bd-line2">
                                <td class="frist"><?php echo $this->_foreach['goods_info']['iteration']; ?></td>
                                <td class="tl"><a target="_blank" href="../goods.php?id=<?php echo $this->_var['vo']['goods_id']; ?>" class="goods_name"> <?php echo $this->_var['vo']['goods_name']; ?></a></td>
                                <td class="tc"><?php echo $this->_var['vo']['goods_shipping_total']; ?></td>
                            </tr>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="container type-a">
                        <div class="hd">
                            <h3><?php echo $this->_var['lang']['sales_statistics']; ?><font style="font-size:12px; color:#7d7d7d"><?php echo $this->_var['lang']['deal_is_real']; ?></font></h3>
                        </div>
                        <div class="content">
                            <table class="ecsc-default-table count">
                            <thead>
                                <tr>
                                    <th width="10%" class="frist"><?php echo $this->_var['lang']['project']; ?></th>
                                    <th width="70%"><?php echo $this->_var['lang']['order_number_unit']; ?></th>
                                    <th width="20%"><?php echo $this->_var['lang']['order_money_unit']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bd-line2">
                                    <td class="frist"><?php echo $this->_var['lang']['yesterday_sales']; ?></td>
                                    <td><?php echo $this->_var['yseterday_shipping_info']['order_total']; ?></td>
                                    <td><?php echo $this->_var['yseterday_shipping_info']['money_total']; ?></td>
                                </tr>
                                <tr class="bd-line2">
                                    <td><?php echo $this->_var['lang']['month_sales']; ?></td>
                                    <td><?php echo $this->_var['month_shipping_info']['order_total']; ?></td>
                                    <td><?php echo $this->_var['month_shipping_info']['money_total']; ?></td>
                                </tr>
                                <tr class="bd-line2">
                                    <td><?php echo $this->_var['lang']['all_sales']; ?></td>
                                    <td><?php echo $this->_var['total_shipping_info']['order_total']; ?></td>
                                    <td><?php echo $this->_var['total_shipping_info']['money_total']; ?></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="guide_dialog" ectype="guide_dialog" style="display:none;">
	<div class="tit"><?php echo $this->_var['lang']['seller_index_dialog_title']; ?></div>
    <div class="guide_content" ectype="guide_content">
        <div class="guide_step">
            <div class="item current">
                <h2><?php echo $this->_var['lang']['seller_index_dialog_tab_1']; ?></h2>
                <div class="spliy">-------<i class="gicon"></i></div>
            </div>
            <div class="item">
                <h2><?php echo $this->_var['lang']['seller_index_dialog_tab_2']; ?></h2>
                <div class="spliy">-------<i class="gicon"></i></div>
            </div>
            <div class="item">
                <h2><?php echo $this->_var['lang']['seller_index_dialog_tab_3']; ?></h2>
                <div class="spliy">-------<i class="gicon"></i></div>
            </div>
            <div class="item">
                <h2><?php echo $this->_var['lang']['seller_index_dialog_tab_4']; ?></h2>
                <div class="spliy">-------<i class="gicon"></i></div>
            </div>
            <div class="item">
                <h2><?php echo $this->_var['lang']['seller_index_dialog_tab_5']; ?></h2>
            </div>
        </div>
        <div class="guide_list">
            <div class="guide_item guide_one"><a href="shop_config.php?act=list_edit" target="_blank"><img src="images/guide/guide_img_1.jpg" /></a></div>
            <div class="guide_item guide_two" style="display:none;"><a href="index.php?act=clear_cache" target="_blank"><img src="images/guide/guide_img_2.jpg" /></a></div>
            <div class="guide_item guide_three" style="display:none;"><a href="goods.php?act=step_up" target="_blank" class="a_left"></a><a href="merchants_steps.php?act=step_up" target="_blank" class="a_right"></a><img src="images/guide/guide_img_3.jpg" /></div>
            <div class="guide_item guide_four" style="display:none;"><a href="visualhome.php?act=list" target="_blank" class="a_top"></a><a href="../mobile/index.php?r=admin/editor" target="_blank" class="a_bot"></a><img src="images/guide/guide_img_4.jpg" /></div>
            <div class="guide_item guide_five" style="display:none;"><a href="visualhome.php?act=list" target="_blank" class="a_top"></a><a href="../mobile/index.php?r=admin/editor" target="_blank" class="a_bot"></a><img src="images/guide/guide_img_5.jpg" /></div>
        </div>
        <div class="guide_btn" data-type="0">
            <a href="javascript:void(0);" class="btn_next" ectype="btnNext"><?php echo $this->_var['lang']['know_next']; ?></a>
            <a href="javascript:void(0);" class="btn_prev btn_disabled" ectype="btnPrev"><?php echo $this->_var['lang']['prev_step']; ?></a>
        </div>
    </div>
</div>

<?php echo $this->fetch('library/seller_footer.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.purebox.js')); ?>
<script type="text/javascript">
	$(".canvas").each(function(){
		var per = $(this).data("per");
		if(per>50){
			$(this).find('.circle').addClass('clip-auto');
			$(this).find('.circle_right').removeClass('wth0');
		}
		$(this).find(".circle_left").css("-webkit-transform","rotate("+(18/5)*per+"deg)");
	});
	
	$(function(){
		if($.cookie('sellerStartHome') == null){
			var content = $("*[ectype='guide_dialog']").html();
			pb({
				id:"guide_dialog",
				title:jl_shop_guide,
				width:1080,
				height:492,
				content:content,
				drag:false,
				foot:false
			});
			
			$("#guide_dialog .guide_list").perfectScrollbar("destroy");
			$("#guide_dialog .guide_list").perfectScrollbar();
			
			$("*[ectype='btnNext']").on("click",function(){
				if(!$(this).hasClass("btn_disabled")){
					var type = $(this).parents(".guide_btn").data("type");
					var g_con = $(this).parents("*[ectype='guide_content']");
					
					g_con.find(".guide_step .item").eq(type+1).addClass("current").siblings().removeClass("current");
					g_con.find(".guide_list .guide_item").eq(type+1).show().siblings().hide();
					
					$(this).parents(".guide_btn").data("type",type+1);
					$(this).siblings("*[ectype='btnPrev']").removeClass("btn_disabled");
	
					if(type == 3){
						$(this).addClass("btn_disabled");
						$(this).html(jl_ok_i_know);
					}else{
						$(this).removeClass("btn_disabled");
						$(this).html(jl_know_next);
					}
					
					$("#guide_dialog .guide_list").perfectScrollbar("destroy");
					$("#guide_dialog .guide_list").perfectScrollbar();
				}else{
					$("#guide_dialog,#pb-mask").remove();
				}
			});
			
			$("*[ectype='btnPrev']").on("click",function(){
				if(!$(this).hasClass("btn_disabled")){
					var type = $(this).parents(".guide_btn").data("type");
					var g_con = $(this).parents("*[ectype='guide_content']");
	
					g_con.find(".guide_step .item").eq(type-1).addClass("current").siblings().removeClass("current");
					g_con.find(".guide_list .guide_item").eq(type-1).show().siblings().hide();
					
					$(this).parents(".guide_btn").data("type",type-1);
					$(this).siblings("*[ectype='btnNext']").removeClass("btn_disabled");
					$(this).siblings("*[ectype='btnNext']").html(jl_know_next);
	
					if(type == 1){
						$(this).addClass("btn_disabled");
					}else{
						$(this).removeClass("btn_disabled");
					}
					
					$("#guide_dialog .guide_list").perfectScrollbar("destroy");
					$("#guide_dialog .guide_list").perfectScrollbar();
				}
			});
			
			//生成cookie
			$.cookie('sellerStartHome','cookieValue', {expires: 1 ,path:'/'});
		};
	});
</script>
</body>
</html>
