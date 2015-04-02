<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<title>商品分类</title>
	<meta http-equiv="pragma" content="no-cache">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="/ecs_weixiao/Public/css/jquery.mobile-1.4.2.min.css" />
	<link rel="stylesheet" href="/ecs_weixiao/Public/css/common.css" />
	<script src="/ecs_weixiao/Public/js/jquery-1.11.1.min.js"></script>
	<script src="/ecs_weixiao/Public/js/jquery.mobile-1.4.2.min.js"></script>
	<style type="text/css">
	.my-nav .my-current{background:#ff4400;}
	</style>
</head>
<body>
	<div data-role="content">
		<div class="my-header-bg">
			<img src="/ecs_weixiao/Public/images/header_bg.gif" class="my-header-img">
			<div class="my-ui-grid">
				<div class="ui-grid-b">
			    	<div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:150px"></div></div>
			    	<div class="ui-block-b">
			    		<div class="ui-bar ui-bar-a" style="height:150px;">
			    			<div class="my-header-image">
			    				<!-- <a data-ajax="false" href="http://localhost/pz/wx/index.php/consumers/consumers/index/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ">
			    					<img src="http://wx.qlogo.cn/mmopen/w9h84ibs6ic2cwVYeJTqmRtNpkhXTqYMrAGA5mAW6d5rPQ4qHvDuSkaZ5ndOj3jajyCRfCjOSYdl9GlicWCUR0v5Lib41WE4B5eu/0"/>
			    				</a> -->
			    				<img onclick="nav_jump(this)" jump-url="http://localhost/pz/wx/index.php/consumers/consumers/index/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ" src="http://wx.qlogo.cn/mmopen/w9h84ibs6ic2cwVYeJTqmRtNpkhXTqYMrAGA5mAW6d5rPQ4qHvDuSkaZ5ndOj3jajyCRfCjOSYdl9GlicWCUR0v5Lib41WE4B5eu/0"/>
			    				<br/>
			    				Jahng			    			</div>
			    		</div>
			    	</div>
			   		<div class="ui-block-c">
			   			<div class="ui-bar ui-bar-a" style="height:150px">

			   			</div>
			   		</div>
				</div><!-- /grid-b -->
			</div>
			<div class="my-nav">
				<div class="ui-grid-c">
			    	<div class="ui-block-a" jump-url="<?php echo U('Seller/Index/index');?>" onclick="nav_jump(this)">
			    		<div class="ui-bar ui-bar-a" style="font-weight:400;color:#ff5616;">
			    			<img src="/ecs_weixiao/Public/images/consumers/add.png" alt="" style="margin-bottom:0.1em;width:24px;margin-top:0.5em;"><br />
			    			添加分类
			    		</div>
			    	</div>
			    	<div class="ui-block-b" jump-url="http://localhost/pz/wx/index.php/merchant/merchant/panic_buy" onclick="nav_jump(this)">
			    		<div class="ui-bar ui-bar-a" style="font-weight:400;">
			    			<img src="/ecs_weixiao/Public/images/consumers/shai.png" alt="" style="margin-bottom:0.1em;width:24px;margin-top:0.5em;"><br />
			    			全民疯抢
			    		</div>
			    	</div>
			   		<div class="ui-block-c" jump-url="http://localhost/pz/wx/index.php/merchant/merchant/collect" onclick="nav_jump(this)">
			   			<div class="ui-bar ui-bar-a" style="font-weight:400;">
			    			<img src="/ecs_weixiao/Public/images/consumers/collect_.png" alt="" style="margin-bottom:0.1em;width:24px;margin-top:0.5em;"><br />
			   				收藏
			   			</div>
			   		</div>
			   		<div class="ui-block-c" jump-url="http://wsq.qq.com/reflow/263536219" onclick="nav_jump(this)">
			   			<div class="ui-bar ui-bar-a" style="font-weight:400;">
			    			<img src="/ecs_weixiao/Public/images/consumers/logo.png" alt="" style="margin-bottom:0.1em;width:24px;margin-top:0.5em;"><br />
			   				晒单区
			   			</div>
			   		</div>
				</div><!-- /grid-b -->
			</div>
		</div>
<script>
function nav_jump(obj){
	window.location.href = $(obj).attr('jump-url');
}
</script><style type="text/css">
.ui-page-theme-a .ui-btn, html .ui-bar-a .ui-btn, html .ui-body-a .ui-btn, html body .ui-group-theme-a .ui-btn, html head + body .ui-btn.ui-btn-a, .ui-page-theme-a .ui-btn:visited, html .ui-bar-a .ui-btn:visited, html .ui-body-a .ui-btn:visited, html body .ui-group-theme-a .ui-btn:visited, html head + body .ui-btn.ui-btn-a:visited{
	background:#ff5616;
}
.ui-page-theme-a .ui-btn{margin-bottom: 0;}
.ui-btn-corner-all, .ui-btn.ui-corner-all, .ui-slider-track.ui-corner-all, .ui-flipswitch.ui-corner-all, .ui-li-count{border-radius: 0.325em 0.325em 0 0;}
</style>
	<link rel="stylesheet" href="/ecs_weixiao/Public/css/merchant_index.css" />
 		<fieldset class="ui-grid-b" style="margin-bottom:2.7em;margin-top:1em;">
				    		<div class="ui-block-b" style="position:relative;margin-bottom:1em;">
	    			<input category-id="39" onclick="my_jump(this)" type="button" value="男装">
	    				<div style="text-align:center;margin-right:0.3125em;margin-left:0.3125em;background:#ffffff;border:1px solid #ccc;border-top:none;border-radius:0 0 0.325em 0.325em;padding:0.5em 0">
			    			<a style="display:inline-block;width:45%;text-align:center;height:1em;line-height:1em;border-top:none;color:#cccccc;text-decoration:none;" category-id="39" onclick="my_edit(this)" category-name="男装" href="#popupCloseLeft" class="ui-corner-all" data-rel="popup">
			    				编辑
			    			</a>
			    			<a style="display:inline-block;width:45%;text-align:center;height:1em;line-height:1em;color:#cccccc;text-decoration:none;" category-id="39" onclick="my_delete(this)">
			    				删除
			    			</a>
			    			<div style="clear:both;"></div>
		    			</div>
	    			<!-- <span style="position:absolute;right:0.3125em;font-size:18px;top:0;padding:0.3em;color:red;" onclick="my_delete(39)">x</span> -->
	    		</div>
	    		    		<div class="ui-block-b" style="position:relative;margin-bottom:1em;">
	    			<input category-id="3" onclick="my_jump(this)" type="button" value="女装">
	    				<div style="text-align:center;margin-right:0.3125em;margin-left:0.3125em;background:#ffffff;border:1px solid #ccc;border-top:none;border-radius:0 0 0.325em 0.325em;padding:0.5em 0">
			    			<a style="display:inline-block;width:45%;text-align:center;height:1em;line-height:1em;border-top:none;color:#cccccc;text-decoration:none;" category-id="3" onclick="my_edit(this)" category-name="女装" href="#popupCloseLeft" class="ui-corner-all" data-rel="popup">
			    				编辑
			    			</a>
			    			<a style="display:inline-block;width:45%;text-align:center;height:1em;line-height:1em;color:#cccccc;text-decoration:none;" category-id="3" onclick="my_delete(this)">
			    				删除
			    			</a>
			    			<div style="clear:both;"></div>
		    			</div>
	    			<!-- <span style="position:absolute;right:0.3125em;font-size:18px;top:0;padding:0.3em;color:red;" onclick="my_delete(3)">x</span> -->
	    		</div>
	    		    		<div class="ui-block-b" style="position:relative;margin-bottom:1em;">
	    			<input category-id="4" onclick="my_jump(this)" type="button" value="鞋子">
	    				<div style="text-align:center;margin-right:0.3125em;margin-left:0.3125em;background:#ffffff;border:1px solid #ccc;border-top:none;border-radius:0 0 0.325em 0.325em;padding:0.5em 0">
			    			<a style="display:inline-block;width:45%;text-align:center;height:1em;line-height:1em;border-top:none;color:#cccccc;text-decoration:none;" category-id="4" onclick="my_edit(this)" category-name="鞋子" href="#popupCloseLeft" class="ui-corner-all" data-rel="popup">
			    				编辑
			    			</a>
			    			<a style="display:inline-block;width:45%;text-align:center;height:1em;line-height:1em;color:#cccccc;text-decoration:none;" category-id="4" onclick="my_delete(this)">
			    				删除
			    			</a>
			    			<div style="clear:both;"></div>
		    			</div>
	    			<!-- <span style="position:absolute;right:0.3125em;font-size:18px;top:0;padding:0.3em;color:red;" onclick="my_delete(4)">x</span> -->
	    		</div>
	    		    		<div class="ui-block-b" style="position:relative;margin-bottom:1em;">
	    			<input category-id="7" onclick="my_jump(this)" type="button" value="裤子">
	    				<div style="text-align:center;margin-right:0.3125em;margin-left:0.3125em;background:#ffffff;border:1px solid #ccc;border-top:none;border-radius:0 0 0.325em 0.325em;padding:0.5em 0">
			    			<a style="display:inline-block;width:45%;text-align:center;height:1em;line-height:1em;border-top:none;color:#cccccc;text-decoration:none;" category-id="7" onclick="my_edit(this)" category-name="裤子" href="#popupCloseLeft" class="ui-corner-all" data-rel="popup">
			    				编辑
			    			</a>
			    			<a style="display:inline-block;width:45%;text-align:center;height:1em;line-height:1em;color:#cccccc;text-decoration:none;" category-id="7" onclick="my_delete(this)">
			    				删除
			    			</a>
			    			<div style="clear:both;"></div>
		    			</div>
	    			<!-- <span style="position:absolute;right:0.3125em;font-size:18px;top:0;padding:0.3em;color:red;" onclick="my_delete(7)">x</span> -->
	    		</div>
	    		    		<div class="ui-block-b" style="position:relative;margin-bottom:1em;">
	    			<input category-id="6" onclick="my_jump(this)" type="button" value="上衣">
	    				<div style="text-align:center;margin-right:0.3125em;margin-left:0.3125em;background:#ffffff;border:1px solid #ccc;border-top:none;border-radius:0 0 0.325em 0.325em;padding:0.5em 0">
			    			<a style="display:inline-block;width:45%;text-align:center;height:1em;line-height:1em;border-top:none;color:#cccccc;text-decoration:none;" category-id="6" onclick="my_edit(this)" category-name="上衣" href="#popupCloseLeft" class="ui-corner-all" data-rel="popup">
			    				编辑
			    			</a>
			    			<a style="display:inline-block;width:45%;text-align:center;height:1em;line-height:1em;color:#cccccc;text-decoration:none;" category-id="6" onclick="my_delete(this)">
			    				删除
			    			</a>
			    			<div style="clear:both;"></div>
		    			</div>
	    			<!-- <span style="position:absolute;right:0.3125em;font-size:18px;top:0;padding:0.3em;color:red;" onclick="my_delete(6)">x</span> -->
	    		</div>
	    		    		<div class="ui-block-b" style="position:relative;margin-bottom:1em;">
	    			<input category-id="8" onclick="my_jump(this)" type="button" value="牛仔裤">
	    				<div style="text-align:center;margin-right:0.3125em;margin-left:0.3125em;background:#ffffff;border:1px solid #ccc;border-top:none;border-radius:0 0 0.325em 0.325em;padding:0.5em 0">
			    			<a style="display:inline-block;width:45%;text-align:center;height:1em;line-height:1em;border-top:none;color:#cccccc;text-decoration:none;" category-id="8" onclick="my_edit(this)" category-name="牛仔裤" href="#popupCloseLeft" class="ui-corner-all" data-rel="popup">
			    				编辑
			    			</a>
			    			<a style="display:inline-block;width:45%;text-align:center;height:1em;line-height:1em;color:#cccccc;text-decoration:none;" category-id="8" onclick="my_delete(this)">
			    				删除
			    			</a>
			    			<div style="clear:both;"></div>
		    			</div>
	    			<!-- <span style="position:absolute;right:0.3125em;font-size:18px;top:0;padding:0.3em;color:red;" onclick="my_delete(8)">x</span> -->
	    		</div>
	    			</fieldset>
		<div class="my-add-cat" style="position:fixed;bottom:0em;text-align:center;display:block;width:100%;margin-bottom:0.5em;">
			<!-- <button class="ui-btn" data-rel="popup">添加分类</button> -->
			<a href="#popupCloseRight" data-rel="popup" class="ui-btn ui-corner-all ui-shadow ui-btn-inline" id="my-do-pop" style="width:40%;border-radius: 0.325em 0.325em;margin-top:0;">添加分类</a>
		</div>
		<div id="my-add-category">
			<div data-role="popup" id="popupCloseRight" class="ui-content" style="max-width:280px">
	   			<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
				<div class="my-pop">
					<input type="text" name="textinput-hide" placeholder="分类名称" value="" id="cateory-name">
					<button class="ui-btn" id="do-add-category">添加</button>
				</div>
			</div>
		</div>

		<div id="my-edit-category" style="position:relative;">
			<div data-role="popup" id="popupCloseLeft" class="ui-content" style="max-width:280px">
	   			<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
				<div class="my-pop">
					<input type="text" name="textinput-hide" placeholder="分类名称(分类名最多4个字)" value="" id="edit-cateory-name" category-id=''>
					<button class="ui-btn" id="do-edit-category">更新</button>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
function my_edit(obj){
	var category_id = $(obj).attr('category-id');
	var cateory_name = $(obj).attr('category-name');
	$('#edit-cateory-name').val(cateory_name);
	$('#edit-cateory-name').attr('category-id',category_id);
	$('#popupCloseLeft-popup').css('left','100px');
}
$("#popupCloseRight").on({
	
    popupafteropen: function() {
    	// var h = $( window ).height();
    	// h = Math.ceil(h/5); 
    	// var w = $( window ).width(); 
    	// w = Math.ceil(h/4);
     	// $( "#popupCloseLeft" ).css( "left",w);
     	//$( "#popupCloseRight-popup" ).css( "left",'25%');
     	$( "#popupCloseRight-popup" ).css( "top",'20%');
        //setTimeout(function(){$( "#popupCloseLeft-popup" ).css( "left",'25%');},0);
    }
     	
    
});
$("#popupCloseLeft").on({
	
    popupafteropen: function() {
    	// var h = $( window ).height();
    	// h = Math.ceil(h/5); 
    	// var w = $( window ).width(); 
    	// w = Math.ceil(h/4);
     	// $( "#popupCloseLeft" ).css( "left",w);
     	$( "#popupCloseLeft-popup" ).css( "left",'25%');
        //setTimeout(function(){$( "#popupCloseLeft-popup" ).css( "left",'25%');},0);
    }
     	
    
});
$(document).ready(function(){
	$('#my-do-pop').click(function(){
		$('#cateory-name').focus();
	});
	
	$('#do-add-category').click(function(){
		var cateory_name = $('#cateory-name').val();
		var url = "http://localhost/pz/wx/index.php/merchant/merchant/add_goods_category";
		
		if(cateory_name == ''){
			alert('请输入分类名');
			return ;
		}
		if(cateory_name.length>4){
			alert('分类名最多4个字');
			return ;
		}else{
			$.ajax({
				type:'post',
				url:url,
				data:'goods_category_name='+cateory_name,
				success:function(msg){
			      	var msg = eval('('+msg+')');
			        //$('#show-add-box-'+live_goods_id).show();
			        //$('#my-goods-'+live_goods_id).hide();
					console.log(msg);
					//alert(msg.msg);
					if(msg.status == 1){
						$('#popupCloseRight-popup').hide();
						var html = '<div class="ui-block-b">';
						window.location.reload();
						//html += '<div class="ui-btn ui-input-btn ui-corner-all ui-shadow">';
						//html +=cateory_name;
						//html +='<input type="button" value="fghfgdg" onclick="my_jump(this)" category-id="'+msg.category_id+'">';
						//html +='</div>';
						//html +='</div>';
						//$('.ui-grid-b').append(html);
					}else{
						alert(msg.msg);
					}
				}

			});
		}
	});	
	$('#do-edit-category').click(function(){
		var cateory_name = $('#edit-cateory-name').val();
		var cateory_id = $('#edit-cateory-name').attr('category-id');
		var url = "http://localhost/pz/wx/index.php/merchant/merchant/edit_goods_category";
		if(cateory_name == ''){
			alert('请输入分类名');
			return ;
		}else{
			$.ajax({
				type:'post',
				url:url,
				data:'category_name='+cateory_name+'&category_id='+cateory_id,
				success:function(msg){
			      	var msg = eval('('+msg+')');
					console.log(msg);
					if(msg.status == 1){
						$('#popupCloseLeft-popup').hide();
						window.location.reload();
					}else{
						alert(msg.msg);
					}
				}

			});
		}
	});
});
function my_jump(obj){
	var category_id = $(obj).attr('category-id');
	var url = "<?php echo U('Seller/Index/local_goods_list','category_id=');?>"+category_id;
	window.location.href = url;
}
function my_delete(obj){
	if(!confirm('确定删除?')){
		return false;
	}else{
		var category_id = $(obj).attr('category-id');
		var url = "http://localhost/pz/wx/index.php/merchant/merchant/delete_goods_category";
		$.ajax({
			type:'post',
			url:url,
			data:'cid='+category_id,
			success:function(msg){
				var msg = eval('('+msg+')');
				console.log(msg);
						
				if(msg.status == 1){
					//$('#popupCloseRight-popup').hide();
					//var html = '<div class="ui-block-b">';
					window.location.reload();
							//html += '<div class="ui-btn ui-input-btn ui-corner-all ui-shadow">';
							//html +=cateory_name;
							//html +='<input type="button" value="fghfgdg" onclick="my_jump(this)" category-id="'+msg.category_id+'">';
							//html +='</div>';
							//html +='</div>';
							//$('.ui-grid-b').append(html);
				}else{
					alert(msg.msg);
				}
			}

		});

	}

}
</script>
</body>
</html>