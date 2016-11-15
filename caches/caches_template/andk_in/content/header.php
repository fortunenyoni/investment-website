<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<?php if(!$catid) { ?>
<link rel="stylesheet" href="./statics/css/Lindex.css?v=2.0">
<script src="./statics/js/jquery.min.js?v=2.0"></script>
<script src="./statics/js/jquery.royalslider.min.js?v=2.0"></script>
<?php } else { ?>
<link rel="stylesheet" href="./statics/css/LlistShow.css?v=2.0">
<script src="./statics/js/jquery.min.js?v=2.0"></script>
<?php } ?>
<!--[if lt IE 9]>
<script src="./statics/js/html5.js"></script>
<link rel="stylesheet" href="./statics/css/Lie.css">
<![endif]-->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="statics/ico/apple-touch-icon-144-precomposed.png">
<link rel="shortcut icon" href="statics/ico/favicon.png">
<style>
.uk-navbar-nav>li.uk-active>a{background-color:#f89e35}
.uk-navbar-nav>li.uk-parent.uk-open>a{background-color:#f89e35}
.uk-navbar-nav{float:left;margin-left:60px;}
.menu h2{background-color:#f89e35}

</style>
</head>
<body>
<header>
<!-- nav -->
<nav class="uk-navbar">
	<div class="uk-container uk-container-center">
		<a class="uk-navbar-brand" href="."><span style="font:600 25px/32px Microsoft Yahei;color:#f89e35;">投资网</span><!--<img src="./statics/images/.png" width="200" height="38" title="裕通租车" alt="裕通租车LOGO">--></a>
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
		<ul class="uk-navbar-nav hidden-small">
			<li <?php if(!$catid) { ?> class="uk-active"<?php } ?>><a href=".">首页</a></li>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li class="uk-parent<?php if($catid==$r[catid] || $top_parentid==$r[catid]) { ?> uk-active<?php } ?>"> <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=502cea5b674647987de4b8b331363f83&action=category&catid=%24r%5Bcatid%5D&num=25&siteid=%3C%3Fphp+echo+%24siteid%3B%3F%3E&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[catid],'siteid'=>'<?php echo $siteid;?>','order'=>'listorder ASC','limit'=>'25',));}?>
				<?php if($data) { ?>
				<div class="uk-dropdown uk-dropdown-navbar">
					<ul class="uk-nav uk-nav-navbar">
						<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
						<li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
						<?php $n++;}unset($n); ?>
					</ul>
				</div>
				<?php } ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</li>
			<?php $n++;}unset($n); ?>
		</ul>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<span style="float:right;color:#fff;font:600 15px/32px Microsoft Yahei;margin-top:4px;">联系电话：0535-2938219</span>
		
		<div class="uk-navbar-flip"><a href="#tm-offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a></div>
	</div>
</nav>
<!-- / nav -->
</header>