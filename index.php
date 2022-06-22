<!DOCTYPE HTML>
<html>
	<head>
		<title>每日一刊-路羽资源博客</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		  <meta name="keywords" content="路羽资源博客 每日一刊 路羽博客 每日一文  每日一笑 每日一图 每日一语 优美文章 天天更新 每日热点 ">
    <meta name="description" content="每天更新的在线文刊，推荐生活情趣高的人浏览。">
    <meta name="baidu-site-verification" content="DSXNBi8EHU" />
	<?php $kong=array("","　","\t","\n","\r"); 
	$web=json_decode(str_replace($kong, '', file_get_contents("http://meiriyikan.cn/api/json.php")));?>
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
  		<link rel="stylesheet" href="assets/css/news.css" />
	</head>
<body>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
			  <header id="header" class="alt">
				  <a href="/"><img class="nav-logo" src="images/logo.png"></a>
						<h1><a href="index.html"></a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>菜单</span></a>
									<div id="menu">
										<ul>
											<li><a href="/">主页</a></li>
											<li><a href="https://luyuw.top/">路羽博客</a></li>
											<li><a href="https://luyuw.top/tools/">路羽博客工具箱</a></li>
											<li><a href="about.html">关于本站</a></li>
											
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
			  
					<section id="banner">
					  
						<div class="inner">
						
						  <h2>每日一刊</h2>
						  <p>刊号:<?php echo file_get_contents("http://meiriyikan.cn/db/date.txt"); ?><br /></p>
							
							<ul class="actions">
								<li><a href="#article" class="button special">阅读</a></li>
							</ul>
						</div>
						<a href="#article" class="more scrolly">Learn More</a>
					</section>
	<script type="text/javascript" src="http://www.clantrip.com/static/js/common.js"></script>
					
			  <section id="news" class="wrapper style5">
				<div class="inner">
				
				<span class="badge pull-left">聚焦热点</span><br>
				 
				 <?php 
				 foreach( $web->news as $unit){
				$news_title= $unit->news_title;
				$news_url= $unit->news_url;
				$news_img= $unit->news_img;
				$news_time= $unit->news_time;
				$news_content= $unit->news_content;
echo '<div class="media our-news-item">
			<a href="'.$news_url.'"><news-title class="media-heading">'.$news_title.'</news-title></a>
			  <div class="media-left">
				<a class="news-img" href="'.$news_url.'">
				  <img class="media-ob" src="'.$news_img.'">
				</a>
			  </div>
			  <div class="media-body">
				<p>'.$news_content.'</p>
				<div class="dynamic-li">
				  <span>来源：新华网<br>时间：'.$news_time.'</span>
				</div>
			  </div>
			</div>';
}?>
				 	
	<!-- 最新资讯 -->
				  <hr>
				  <span id="article" class="badge pull-left">精选美文</span><br>
				  <h3><?php echo $web->article_title; ?></h3>
				  <h4><?php echo $web->article_author; ?></h4>
				  <?php echo $web->article_content; ?>
				  <hr>
				  <span class="badge pull-left">每日一图</span><br>
				  <h4><?php echo $web->img_title; ?></h4>
				  <img class="image" src="<?php echo $web->img_url; ?>" >
				  <p><?php echo $web->img_content; ?></p>		 
			  <hr>
				<span class="badge pull-left">微小说</span><br>
				<?php echo $web->wxs; ?>
				</div></section>
				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">

							<header class="major">
								<h2><?php echo $web->yiyu; ?><br />
								</h2>

							</header>
						
						</div>
					</section>
				
                         </body>
				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<!-- Scripts  <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>   -->
							<!-- Scripts  <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>   -->
							<!--<li><a href="https://luyuw.top" class="icon fa-instagram"><span class="label">Instagram</span></a></li>-->
							<!--<li><a href="https://luyuw.top" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>-->
							<li><a href="luyuw.top@foxmail.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
						<li>友情链接：<a href="http://meiriyiwen.com" >路羽资源博客</a> </li>
						
							<li>All rights reserved&copy; meiriyikan</li><li>发行商：<a href="/">每日一刊</a>            豫ICP备17050064号</li>
						</ul>
	<div><script>api()</script></div>
						<!-- 统计代码 -->
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/loading.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
  <script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();





$(function() {
  $(window).scroll(function() {
    if($(this).scrollTop() != 0) {
      $("#toTop").fadeIn(); 
    } else {
      $("#toTop").fadeOut();
    }
  });
  $("body").append("<div id=\"toTop\" style=\"border:1px solid #444;background:#333;color:#fff;text-align:center;padding:10px 13px 6px 13px;position:fixed;bottom:20px;right:20px;cursor:pointer;display:none;font-family:verdana;font-size:22px;\">^</div>");
  $("#toTop").click(function() {
    $("body,html").animate({scrollTop:0},800);
  });
});

</script>

	
</html>



		