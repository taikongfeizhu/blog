<?php
    $year=date('Y');
    $version="1.0";
    /*get ready*/
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="前端工程师,前端开发,太空飞猪,jenking,jQuery bootstrap,taikongfeizhu.com,html5,javascript,css3,php" />
	<meta name="description" content="前端工程师,前端开发,太空飞猪,jenking,jQuery bootstrap,taikongfeizhu.com,html5,javascript,css3,php" />
	<meta name="Language" content="zh-CN" />
	<meta name="Copyright" content="taikongfeizhu.com" />
	<meta name="Designer" content="taikongfeizhu.com" />
	<meta name="Publisher" content="太空飞猪,jenking,前端码农" />
	<meta name="Distribution" content="Global" />
	<meta name="author"  content="太空飞猪,jenking,前端码农" />
	<meta name="robots" content="index,follow" />
	<meta name="googlebot" content="index,follow,archive" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/js/rs-plugin/css/settings.css" type="text/css">
    <link rel="stylesheet" href="assets/js/rs-plugin/css/fullwidth.css" type="text/css">
    <link href="assets/icons/favicon.ico" type="image/x-icon" rel=icon>
    <link rel="shortcut icon" href="assets/icons/favicon.ico" type="image/x-icon" />
    
    <!-- 字体 -->
    <link href="assets/icons/pictopro-normal/style.css" rel="stylesheet" type="text/css">
    <link href="assets/icons/pictopro-outline/style.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-responsive.css" type="text/css">
    <link rel="stylesheet" href="assets/fancybox/jquery.fancybox.css" type="text/css">
    <link rel="stylesheet" href="assets/css/infine.css" type="text/css">

    <!--[if lt IE 9]>
       	<link rel="stylesheet" id="ie8-css"  href="assets/css/ie8.css" type="text/css" media="all">
	<![endif]-->

	<title>taikongfeizhu.com <?php echo $year ?></title>
</head>

<body data-spy="scroll" data-target=".main-navigation">

<div id="loading-start">
    <div id="loading_show">
        <img src="assets/img/loading.gif"/>哥在努力加载中,请等待......
    </div>
</div>

<div class="navigation">
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>

                <div class="logo">
                    <a href="#nav-header" class="roll"><span>taikongfeizhu.com</span></a>
                </div><!-- /.logo -->

                <div class="main-navigation nav-collapse collapse">
                    <ul class="nav">
                        <li class="active"><a href="#nav-header">首页</a></li>
                        <li><a href="#nav-speakers">行者无疆</a></li>
                        <li><a href="#nav-schedule">战斗指数</a></li>
                        <li><a href="#nav-about">建站宣言</a></li>
                        <li><a href="#nav-contact">联系方式</a></li>
                    </ul>
                </div><!-- /.main-navigation -->
            </div><!-- /.container -->
        </div><!-- /.navbar-inner -->
    </div><!-- /.main-navigation -->
</div><!-- /.navigation -->

<div id="nav-header" class="header-wrapper">
    <div class="header">

        <div class="fullwidthbanner-container">
           <div class="fullwidthbanner">
                <ul class="unstyled">
                    <li class="first-slide" data-transition="fade">
                        <img src="assets/pictures/background-conference-1.jpg" data-fullwidthcentering="on">

                        <div class="caption sfr caption-main" data-x="center" data-y="200" data-speed="900" data-start="0" data-easing="easeOutBack" fullwidthcentering="on">
                            <div class="header-item">
                                <div>
                                    <h1>Welcome, My Friends!</h1>
                                    <h4>Hi， 欢迎来到我的的网上家园，期待与您敞心交流，共勉共进!</h4>
                                </div><!-- /.title -->
                            </div><!-- /.header-item -->

                            <div class="countdown wrapper">
                                <div class="countdown-container sl-slider">
                                    <div class="sl-trans-elems">
                                              <h2><img id="myHead" class="myHead" src="assets/pictures/head.jpg"></h2>
                                              <blockquote>
                                                <h3 data-i18n="conf-date" lang="zh-cn">{"name":"太空飞猪"}</h3>
                                                <p data-i18n="conf-tagline" lang="zh-cn">浮世滔,人情渺,千古纷争何时了？江湖远，碧空长，几度凋零试锋芒...</p></blockquote>
                                            </div>
                                </div><!-- /.countdown-container -->
                            </div><!-- /.countdown -->
                        </div><!-- /.caption -->
                    </li>

                    <li class="second-slide" data-transition="fade">
                        <img  src="assets/pictures/background-conference-2.jpg" fullwidthcentering="on">

                        <div class="caption sfr caption-main" data-x="center" data-y="200" data-speed="900" data-start="0" data-easing="easeOutBack">
                            <div class="header-item">
                                <div>
                                    <h1>More power,More responsibility</h1>
                                    <h3>tommorrow is another day? maybe,just keep moving…</h3>
                                </div>
                            </div><!-- /.header-item -->

                            <div>
                                <img src="assets/img/gdg-devfest-season.png" alt="">
                            </div>
                        </div><!-- /.caption -->
                    </li>

                    <li class="third-slide" data-transition="fade">
                        <img src="assets/pictures/background-conference-3.jpg" fullwidthcentering="on">

                        <div class="caption sfr caption-main" data-x="center" data-y="300" data-speed="900" data-start="0" data-easing="easeOutBack">
                            <div class="header-item">
                                <div>
                                    <h1>未完待续<br><br>敬请关注...</h1>
                                </div>
                            </div><!-- /.header-item -->
                        </div>

                        <div class="caption fade" data-x="800" data-y="250" data-speed="100" data-start="0" data-easing="fade">
                            <div class="last-seats"><a href="#" class="roll" target="_blank"><p>感谢您的支持<br><br>我会做的更好</p></a></div>
                        </div>
                    </li>
                </ul><!-- /.revolution -->
           </div>
        </div>
    </div><!-- /.header -->
</div><!-- /.header-wrapper -->

<div id="nav-subscribe" class="subscribe-wrapper">
    <div class="subscribe">
        <div class="container">
            <div class="form row">
                <div class="span8 offset2">
                    <h4><a class="btn btn-large btn-success" href="http://weibo.com/taikongfeizhu"  target="_blank"><strong>我的微博</strong></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-large btn-danger" href="http://www.taikongfeizhu.com/tools"  target="_blank"><strong>我的工具</strong></a></h4>
                </div><!-- /.span8 -->
            </div><!-- /.form -->
        </div><!-- /.container -->
    </div><!-- /.subscribe -->
</div><!-- /.subscribe-wrapper -->

<div id="nav-features" class="features-wrapper">
    <div class="features">
        <div class="features-inner container">
            <div class="row">
                <div class="item orange span4">
                    <div class="row">
                        <div class="wrapper-icon span1">
							<div class="background-icon">
								<i class="icon icon-normal-script"></i>
                            </div><!-- /.background-icon -->
                        </div><!-- /.wrapper-icon -->

                        <div class="text-wrapper span3 pull-right">
                            <h3>Front-End Developer</h3>
                            <p class="features-description">无形于html，泼毫css间，驰骋于javascript新天地...</p>
                        </div><!-- /.text-wrapper -->
                    </div><!-- /.row -->
                </div><!-- /.item -->

                <div class="item blue span4">
                    <div class="row">
                        <div class="wrapper-icon span1">
							<div class="background-icon">
								<i class="icon icon-normal-pointer-plus"></i>
                            </div><!-- /.background-icon -->
                        </div><!-- /.wrapper-icon -->

                        <div class="text-wrapper span3">
                            <h3>Pythonic Fans</h3>
                            <p class="features-description">贯彻落实python八荣八耻，走有和谐社会主义特色的python之路...</p>
                        </div><!-- /.text-wrapper -->
                    </div><!-- /.row -->
                </div><!-- /.item -->

                <div class="item yellow span4">
                    <div class="row">
                        <div class="wrapper-icon span1">
							<div class="background-icon">
								<i class="icon icon-normal-technology-screen-resolution"></i>
							</div><!-- /.background-icon -->
                        </div><!-- /.wrapper-icon -->

                        <div class="text-wrapper span3">
                            <h3>PHP Rookie</h3>
                            <p class="features-description">那个谁说了，PHP是世界上最好的语言...</p>
                        </div><!-- /.text-wrapper -->
                    </div><!-- /.row -->
                </div><!-- /.item -->
            </div><!-- /.row -->
        </div><!-- /.features-inner -->
    </div><!-- /.features -->
</div><!-- /.features-wrapper -->

<div id="nav-speakers" class="speakers-wrapper">
    <div class="container">
        <h2>要么读书,要么旅行,精神和肉体,必须有一个在路上...</h2>
        <h4>好读书 不求甚解 每有会意 便欣然忘食</h4>

        <div class="speakers">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-1" data-toggle="tab"><?php echo $year ?>关注的事</a></li>
                <li><a href="#tab-2" data-toggle="tab"><?php echo $year ?>推荐的书</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab-1">
                    <div class="row speaker">
                        <div class="span2 image center">
                            <div class="image-box">
                                <img class="lazy" data-original="assets/img/nodejs.jpg" alt="nodejs.jpg">
                            </div><!-- /.image-box -->
                        </div><!-- /.image -->

                        <div class="span7">
                            <p class="name">Nodejs</p>
                            <p class="company">相对于过去几年的概念推广，2013注定是<a target="_blank" href="http://cnodejs.org/">nodejs</a>追随者大爆发的一年</p>
                            <p class="talk-title">基于Chrome V8的服务端JS</p>
                            <p class="time"><span class="time-start">关注指数:</span>5</p>
                            <p class="content">
                            </p>
                        </div><!-- /.span7 -->

                        <div class="span3">
							<div class="about">
								<h4>关于 nodejs</h4>
								<p>
Node.js是一个可以快速构建网络服务及应用的平台。该平台的构建是基于Chrome's JavaScript runtime(V8引擎)，V8引擎本身使用了一些最新的编译技术。这使得用Javascript这类脚本语言编写出来的代码与用C这类高级语言写出来的代码性能相差无几，却节省了开发成本。由于Javascript是一个事件驱动语言，Node利用了这个优点，编写出可扩展性高的服务器，采用了一个称为“事件循环(event loop）”的架构，使得编写可扩展性高的服务器变得既容易又安全。提高服务器性能的技巧有多种多样。								</p>
							</div><!-- /.about -->
                        </div><!-- /.span3 -->
                    </div><!-- /.speaker -->


                    <div class="row speaker">
                        <div class="span2 image center">
                            <div class="image-box">
                                <img class="lazy" data-original="assets/fav/angularjs.jpg" alt="angularjs">
                            </div>
                        </div><!-- /.image -->

                        <div class="span7">
                            <p class="name">Angularjs</p>
                            <p class="company"><a target="_blank" href="http://www.angularjs.cn/">AngularJS</a>通过为开发者呈现一个更高层次的抽象来简化应用的开发。</p>
                            <p class="talk-title">使用angularjs开发下一代web应用</p>
                            <p class="time"><span class="time-start">关注指数:</span>5</p>
                            <p class="content">
                            </p>
                        </div><!-- /.span7 -->

                        <div class="span3">
                        	<div class="about">
                        		<h4>关于 Angularjs</h4>
                        		<p>
                        		AngularJS是为了克服HTML在构建应用上的不足而设计的,AngularJS使用了自己的方法，它尝试去补足HTML本身在构建应用方面的缺陷，通过使用我们称为标识符(directives)的结构，让浏览器能够识别新的语法。AngularJS试图成为WEB应用中的一种端对端的解决方案。这意味着它不只是你的WEB应用中的一个小部分，而是一个完整的端对端的解决方案。这会让构建一个CRUD应用可能用到的全部内容包括：数据绑定、基本模板标识符、表单验证、路由、深度链接、组件重用、依赖注入等均可通过angularjs实现。
                </p>
							</div><!-- /.about -->
                        </div><!-- /.span3 -->
                    </div><!-- /.speaker -->

                    <div class="row speaker">
                        <div class="span2 image center">
                            <div class="image-box">
                                <img class="lazy" data-original="assets/fav/monggodb.jpg" alt="coffeescript">
                            </div>
                        </div><!-- /.image -->

                        <div class="span7">
                            <p class="name">MongoDB</p>
                            <p class="company"><a href="http://www.mongodb.org/" target="_blank">MongoDB</a>是一个基于分布式文件存储的数据库。由C++语言编写。旨在为WEB应用提供可扩展的高性能数据存储解决方案。</p>
                            <p class="talk-title">简单易用跨平台，面向集合型的数据库</p>
                            <p class="time"><span class="time-start">关注指数:</span>5</p>
                            <p class="content">
                            </p>
                        </div><!-- /.span7 -->

                        <div class="span3">
                            <div class="about">
                                <h4>关于 MongoDB</h4>
                                <p>
                               MongoDB是一个介于关系数据库和非关系数据库之间的产品，是非关系数据库当中功能最丰富，最像关系数据库的。他支持的数据结构非常松散，是类似json的bson格式，因此可以存储比较复杂的数据类型。Mongo最大的特点是他支持的查询语言非常强大，其语法有点类似于面向对象的查询语言，几乎可以实现类似关系数据库单表查询的绝大部分功能，而且还支持对数据建立索引。</p>
                            </div><!-- /.about -->
                        </div><!-- /.span3 -->
                    </div><!-- /.speaker -->

                     <div class="row speaker">
                        <div class="span2 image center">
                            <div class="image-box">
                                <img class="lazy" data-original="assets/fav/django.jpg" alt="coffeescript">
                            </div>
                        </div><!-- /.image -->

                        <div class="span7">
                            <p class="name">Django</p>
                            <p class="company"><a target="_blank" href="http://docs.30c.org/djangobook2/">Django</a>是一个开放源代码的Web应用框架，由Python写成。采用了MVC的软件设计模式.</p>
                            <p class="talk-title">基于python的功能强大的的web开发框架</p>
                            <p class="time"><span class="time-start">关注指数:</span>4</p>
                            <p class="content">
                            </p>
                        </div><!-- /.span7 -->

                        <div class="span3">
                            <div class="about">
                                <h4>关于 Django</h4>
                                <p>
                               Django是一个开放源代码的Web应用框架，由Python写成。采用了MVC的软件设计模式，它最初是被开发来用于管理劳伦斯出版集团旗下的一些以新闻内容为主的网站的。并于2005年7月在BSD许可证下发布。Django的主要目标是使得开发复杂的、数据库驱动的网站变得简单。Django注重组件的重用性和“可插拔性”，敏捷开发和DRY法则。在Django中Python被普遍使用，甚至包括配置文件和数据模型。Django于2008年6月17日正式成立基金会。</p>
                            </div><!-- /.about -->
                        </div><!-- /.span3 -->
                    </div><!-- /.speaker -->

                     <div class="row speaker">
                        <div class="span2 image center">
                            <div class="image-box">
                                <img class="lazy" data-original="assets/fav/grunt.jpg" alt="grunt">
                            </div>
                        </div><!-- /.image -->

                        <div class="span7">
                            <p class="name">Grunt</p>
                            <p class="company"><a target="_blank" href="http://www.gruntjs.net/">Grunt</a>能自动化的处理大部分的前端开发中的常见工作任务，极大的提高开发效率</p>
                            <p class="talk-title">Javascript世界里的构建工具</p>
                            <p class="time"><span class="time-start">关注指数:</span>4</p>
                            <p class="content">
                            </p>
                        </div><!-- /.span7 -->

                        <div class="span3">
                            <div class="about">
                                <h4>关于 Grunt</h4>
                                <p>
                               Grunt是一个自动化的项目构建工具。如果你需要重复的执行像压缩，编译，单元测试，代码检查以及打包发布的任务。那么你可以使用Grunt来处理这些任务，你所需要做的只是配置好Grunt，这样能很大程度的简化你的工作。Grunt已经形成了一个庞大的生态系统，你可以自由的选择数以百计的插件以帮助你自动化的处理任务。</p>
                            </div><!-- /.about -->
                        </div><!-- /.span3 -->
                    </div><!-- /.speaker -->

                    <div class="row speaker">
                        <div class="span2 image center">
                            <div class="image-box">
                                <img class="lazy" data-original="assets/fav/bootstrap.jpg" alt="bootstrap">
                            </div>
                        </div><!-- /.image -->

                        <div class="span7">
                            <p class="name">Bootstrap</p>
                            <p class="company">简洁、直观、强悍的前端开发框架，<a href="http://www.bootcss.com/" target="_blank" >Bootstrap</a>让web开发更迅速、简单。</p>
                            <p class="talk-title">来自twitter的web界面快速开发工具包</p>
                            <p class="time"><span class="time-start">关注指数:</span>4</p>
                            <p class="content">
                            </p>
                        </div><!-- /.span7 -->

                        <div class="span3">
                            <div class="about">
                                <h4>关于 Bootstrap</h4>
                                <p>
                               Bootstrap是Twitter推出的一个用于前端开发的开源工具包。它由Twitter的设计师Mark Otto和Jacob Thornton合作开发，是一个CSS/HTML框架。目前，Bootstrap最新版本为3.0 ,也是目前github上最火的项目之一</p>
                            </div><!-- /.about -->
                        </div><!-- /.span3 -->
                    </div><!-- /.speaker -->

                    <div class="row speaker">
                        <div class="span2 image center">
                            <div class="image-box">
                                <img class="lazy" data-original="assets/fav/coffeescript.jpg" alt="coffeescript">
                            </div>
                        </div><!-- /.image -->

                        <div class="span7">
                            <p class="name">Coffeescript</p>
                            <p class="company"><a href="http://coffeescript.org/" target="_blank">CoffeeScript</a>构建在JavaScript上层，将类似Ruby语法的代码编译成JavaScript</p>
                            <p class="talk-title">一种更优雅更强大的编程语言</p>
                            <p class="time"><span class="time-start">关注指数:</span>4</p>
                            <p class="content">
                            </p>
                        </div><!-- /.span7 -->

                        <div class="span3">
                            <div class="about">
                                <h4>关于 Coffeescript</h4>
                                <p>
                                CoffeeScript提供了一种简洁的语法，应该会吸引到那些喜欢Python或是Ruby的人。其还提供了许多由诸如Haskell和Lisp一类的语言启发而来函数式编程功能。CoffeeScript被编译成高效的JavaScript，除了在web浏览器中运行这些JavaScript之外，你还可以与诸如用于服务器端应用的Node.js一类的技术来一起使用它，编译过程通常都很简单，产生出来的JavaScript与许多的最佳做法都保持了一致。</p>
                            </div><!-- /.about -->
                        </div><!-- /.span3 -->
                    </div><!-- /.speaker -->

                    <div class="row speaker">
                        <div class="span2 image center">
                            <div class="image-box">
                                <img class="lazy" data-original="assets/fav/yii.jpg" alt="yii">
                            </div>
                        </div><!-- /.image -->

                        <div class="span7">
                            <p class="name">Yii</p>
                            <p class="company"><a href="http://www.yiichina.com/" target="_blank">Yii</a>Yii是一个高性能的，适用于开发WEB2.0应用的PHP框架。</p>
                            <p class="talk-title">快速，安全，专业的PHP框架</p>
                            <p class="time"><span class="time-start">关注指数:</span>3</p>
                            <p class="content">
                            </p>
                        </div><!-- /.span7 -->

                        <div class="span3">
                            <div class="about">
                                <h4>关于 Yii</h4>
                                <p>
                                Yii是一个基于组件、用于开发大型 Web 应用的 高性能 PHP 框架。Yii 几乎拥有了 所有的特性 ，包括 MVC、DAO/ActiveRecord、I18N/L10N、caching、基于 JQuery 的 AJAX 支持、用户认证和基于角色的访问控制、脚手架、输入验证、部件、事件、主题化以及 Web 服务等等。Yii 采用严格的 OOP 编写，Yii 使用简单，非常灵活，具有很好的可扩展性。</p>
                            </div><!-- /.about -->
                        </div><!-- /.span3 -->
                    </div><!-- /.speaker -->

                </div><!-- /.tab-1 -->

                <div class="tab-pane fade" id="tab-2">

                    <div class="row speaker">
                        <div class="span2 image center">
                            <div class="image-box">
                                <img class="lazy" src="assets/fav/neteasy.jpg" alt="网易新闻">
                            </div>
                        </div><!-- /.image -->

                        <div class="span7">
                            <p class="name">有态度无节操</p>
                            <p class="company">这货绝对是正规新闻里做的最三俗的，三俗新闻里做的正规的，亮点往往在评论中。</p>
                            <p class="talk-title">网易新闻客户端</p>
                            <p class="time"><span class="time-start">推荐指数</span> 5</p>
                        </div><!-- /.span7 -->

                        <div class="span3">
							<div class="about">
								<h4>关于网易新闻</h4>

								<p>
网易新闻客户端自推出以来，凭借“有态度”的新闻理念、优质的新闻内容和不断创新的交互设计体验，提供全天24小时滚动即时的新闻资讯，涵盖新闻、娱乐、体育、财经和时尚等32个栏目。除了新闻内容丰富，网易新闻客户端的跟贴、图集、投票都广受欢迎，其中的“跟贴”更是网易的拳头产品，“无跟贴 不新闻”已经成为网易新闻客户端的推广语。
                                </p>
							</div><!-- /.about -->
                        </div><!-- /.span3 -->
                    </div><!-- /.speaker -->

                    <div class="row speaker">
                        <div class="span2 image center">
                            <div class="image-box">
                                <img class="lazy" src="assets/fav/cjly.jpg" alt="财经郎眼">
                            </div>
                        </div><!-- /.image -->

                        <div class="span7">
                            <p class="name">最具鲜明郎咸平风格的聊天式新闻评论节目</p>
                            <p class="company">嬉笑怒骂专业吐槽</p>
                            <p class="talk-title">财经郎眼</p>
                            <p class="time"><span class="time-start">推荐指数</span> 5</p>
                        </div><!-- /.span7 -->

                        <div class="span3">
                            <div class="about">
                                <h4>关于财经郎眼</h4>
                                <p>财经郎眼是中国最新锐、最具影响力的财经谈话类节目！节目邀请著名经济学家 郎咸平担当固定嘉宾，邀请财经媒体人、专家学者以及企业家担当常任嘉宾，并以三人聊天的方式实现经济学“生活化”、“媒介化”。节目的基本形式为“聊天+小片”，关注民生经济事件，透析世间万象，寻求各类新闻的经济学解读和个性化讲述。
                                </p>
                            </div><!-- /.about -->
                        </div><!-- /.span3 -->
                    </div><!-- /.speaker -->

                    <div class="row speaker">
                        <div class="span2 image center">
                            <div class="image-box">
                                <img class="lazy" data-original="assets/fav/ljsw.jpg" alt="逻辑思维">
                            </div>
                        </div><!-- /.image -->

                        <div class="span7">
                            <p class="name">有种、有料、有趣！</p>
                            <p class="company">我们的口号是：“死磕自己，愉悦大家！”。</p>
                            <p class="talk-title">逻辑思维</p>
                            <p class="time"><span class="time-start">推荐指数</span> 5</p>
                        </div><!-- /.span7 -->

                        <div class="span3">
                            <div class="about">
                                <h4>关于罗辑思维</h4>

                                <p>有种、有料、有趣！《罗辑思维》是一场自媒体试验，罗振宇做起了“手艺活儿”，凭着自己的知识和志趣，为大家读书，给各位讲故事，一起发现对这个世界的新思维，内容丰富，思想明确而又不偏激，非常适合多年忍受某联播洗脑后的广大民众阅读。
                                </p>
                            </div><!-- /.about -->
                        </div><!-- /.span3 -->
                    </div><!-- /.speaker -->

                    <div class="row speaker">
                        <div class="span2 image center">
                            <div class="image-box">
                                <img class="lazy" data-original="assets/fav/xiaoshuo.jpg" alt="晓说"/>
                            </div>
                        </div><!-- /.image -->

                        <div class="span7">
                            <p class="name">正史的里子，野史的范儿</p>
                            <p class="company">高晓松的知识脱口秀</p>
                            <p class="talk-title">晓说1,2</p>
                            <p class="time"><span class="time-start">推荐指数</span> 5</p>
                        </div><!-- /.span7 -->

                        <div class="span3">
                            <div class="about">
                                <h4>关于晓说</h4>
                                <p>晓说为一档为高晓松量身定制的视频脱口秀节目，也是中国第一档全自由发挥的知识类名人脱口秀。《晓说》每期发起一个热门话题，由高晓松即兴说历史、评人物、论文化、谈热点、看世界，打造视频化的“高晓松专栏文章”。
                                </p>
                            </div><!-- /.about -->
                        </div><!-- /.span3 -->
                    </div><!-- /.speaker -->

                    <div class="row speaker">
                        <div class="span2 image center">
                            <div class="image-box">
                                <img class="lazy" data-original="assets/fav/rysh.jpg" alt="人月神话">
                            </div>
                        </div><!-- /.image -->

                        <div class="span7">
                            <p class="name">软件工程管理中备受推崇的一部白金级读物</p>
                            <p class="company">人月神话、没有银弹</p>
                            <p class="talk-title">人月神话</p>
                            <p class="time"><span class="time-start">推荐指数</span> 5</p>
                        </div><!-- /.span7 -->

                        <div class="span3">
                            <div class="about">
                                <h4>关于人月神话</h4>
                                <p>大型编程项目深受由于人力划分产生的管理问题的困扰，保持产品本身的概念完整性是一个至关重要的需求。《人月神话(英文版)》探索了达成一致性的困难和解决的方法，并探讨了软件工程管理的其他方面。《人月神话(英文版)》适合任何软件开发行业的从业人员阅读，对软件开发人员、软件项目经理、系统分析师更是必读之作。
                                </p>
                            </div><!-- /.about -->
                        </div><!-- /.span3 -->
                    </div><!-- /.speaker -->

                    <div class="row speaker">
                        <div class="span2 image center">
                            <div class="image-box">
                                <img class="lazy" data-original="assets/fav/dg.jpg" alt="世界是数字的">
                            </div>
                        </div><!-- /.image -->

                        <div class="span7">
                            <p class="name">非常适合阅读的一部科普类读物</p>
                            <p class="company">无论你有没有计算机背景，无论你从事什么职业，只要你认同自己生活在数字时代，本书就是值得一读的！</p>
                            <p class="talk-title">世界是数字的</p>
                            <p class="time"><span class="time-start">推荐指数</span> 5</p>
                        </div><!-- /.span7 -->

                        <div class="span3">
                            <div class="about">
                                <h4>关于世界是数字的</h4>
                                <p>家用电器、汽车、飞机、相机、手机、GPS 导航仪，还有游戏机，虽然你看不见，但这些设备都有计算能力。手机通信网络、有线电视网络、空中交通管制系统、电力系统、银行和金融服务系统等基础设施背后无一不是计算机在支撑。如今的世界是数字的，而计算机和计算无处不在。这本《世界是数字的》就是要告诉大家数字世界有关计算机的一切。《世界是数字的》没有高深莫测的专业术语，但它全面解释了当今计算和通信领域的工作方式，包括硬件、软件、互联网、通信和数据安全，并且讨论了新技术带来的社会、政治和法律问题。
                                </p>
                            </div><!-- /.about -->
                        </div><!-- /.span3 -->
                    </div><!-- /.speaker -->

                    <div class="row speaker">
                        <div class="span2 image center">
                            <div class="image-box">
                                <img class="lazy" data-original="assets/fav/sbq.jpg" alt="程序员，你伤不起"/>
                            </div>
                        </div><!-- /.image -->

                        <div class="span7">
                            <p class="name">一部极具个性的屌丝码农奋斗逆袭史</p>
                            <p class="company">我曾经也泄气过，但是我经常能死灰复燃，顽强得很！一定要杀出条血路来，一定要成功，苦点儿累点儿也认了。</p>
                            <p class="talk-title">程序员，你伤不起</p>
                            <p class="time"><span class="time-start">推荐指数</span> 4</p>
                        </div><!-- /.span7 -->

                        <div class="span3">
                            <div class="about">
                                <h4>关于程序员，你伤不起</h4>
                                <p>《程序员，你伤不起》是作者博客文章的精选集。是作者作为老牌程序员、现在的IT创业者15年软件开发生涯的心路历程和经验总结。涉及程序人生、开发经验、职业规划、创业心得。对任何的软件开发者和IT从业人员都有借鉴价值。作者语言风趣幽默，读起来津津有味。字里行间充满了不屈不挠的码农正能量。
                                </p>
                            </div><!-- /.about -->
                        </div><!-- /.span3 -->
                    </div><!-- /.speaker -->

                    <div class="row speaker">
                        <div class="span2 image center">
                            <div class="image-box">
                                <img class="lazy" data-original="assets/fav/tenyear.jpg" alt="淘宝技术这十年">
                            </div>
                        </div><!-- /.image -->

                        <div class="span7">
                            <p class="name">淘宝大学校长给你讲述淘宝这十年技术的变迁史</p>
                            <p class="company">只要你身处IT圈，这本书都有无穷无尽的看点，让你大呼过瘾之余，深受启发，进而陷入沉思，</p>
                            <p class="talk-title">淘宝技术这十年</p>
                            <p class="time"><span class="time-start">推荐指数</span> 4</p>
                        </div><!-- /.span7 -->

                        <div class="span3">
                            <div class="about">
                                <h4>关于淘宝技术这十年</h4>
                                <p>任何网站的发展都不是一蹴而就的，发展过程中 会遇到各种各样的问题和业务带来的压力。正是这些 问题和压力推动着技术的进步和发展，而技术的发展 反过来又会促进业务的更大提升。如今淘宝网的流量 已是全球前15 名、国内前3 名，其系统服务器也从 一台发展到万台以上。 子柳所著的《淘宝技术这十年》从工程师的角度 讲述淘宝这个超大规模互联网系统的成长历程，及其 所有主动和被 动的技术变革的前因后果。《淘宝技术 这十年》中有幕后故事、产品经验、架构演进、技术 启蒙，也有大牛成长、业内八卦、失败案例、励志故 事。写作文风流畅，有技术人员特有的幽默感；内容 积极正面，有现场感，全部是作者亲身经历。
                                </p>
                            </div><!-- /.about -->
                        </div><!-- /.span3 -->
                    </div><!-- /.speaker -->

                </div><!-- /.tab-2 -->
            </div><!-- /.tab-content -->
        </div><!-- /.speakers -->
    </div><!-- /.container -->
</div><!-- /.speakers-wrapper -->

<div class="parallax-wrapper parallax-first">
	<div class="parallax">
		<div class="inner">
			<div class="container">
				<div class="row">
					<div class="span12">
						<span class="parallax-title">没有注定的命运&nbsp;只有抗争出来的明天</span>
					</div><!-- /.span12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.inner -->
	</div><!-- /.parallax -->
</div><!-- /.parallax-wrapper -->

<div id="nav-schedule" class="pricing-wrapper">
    <div class="pricing">
        <div class="pricing-inner">
			<div class="container has-options">
				<h2>战斗指数</h2>
				<br><br>

				<div class="row">
				  <div class="span1"></div>
				  <div class="span10">

                      <table class="table table-hover table-bordered">
                          <thead>
                          <tr>
                              <th colspan="2">分类</th>
                              <th colspan="2">内容</th>
                          </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td rowspan="6">FE-Dev</td>
                                  <td>base</td>
                                  <td colspan="2">熟悉主流Web浏览器的开发模式和特性，熟练书写符合W3C标准的html结构和CSS层叠样式表</td>
                              </tr>
                              <tr>
                                  <td>Javascript</td>
                                  <td colspan="2">了解原生javascript中的作用域、闭包和活动对象上下文，dom遍历，prototype的原型链继承和ajax技术的基本应用</td>
                              </tr>
                              <tr>
                                  <td>libs&framework</td>
                                  <td colspan="2">
                                      能熟练使用jQuery，undercore和tangram库并了解其内部构成和扩展机制，了解Boostrap，Ext，YUI，Backbone，Angularjs，requiresjs，quint，jade等各主流框架的使用技巧
                                  </td>
                              </tr>
                              <tr>
                                  <td>html5</td>
                                  <td colspan="2">
                                      了解html5中新增属性和方法的使用，了解CSS3新特性的使用和渐进增强原则，较熟练使用canvas，localstorage，websockets，geolcation，filesystem，svg，vedio/audio等使用技巧
                                  </td>
                              </tr>
                              <tr>
                                  <td>webapp</td>
                                  <td colspan="2">了解响应式设计的基本原则与实现，熟练使用zepto，jquery
                                      mobile等移动平台的界面框架，了解phonegap的环境配置和使用技巧，能在移动开发环境中(ios Xcode)进行webapp的开发
                                  </td>
                              </tr>
                              <tr>
                                  <td>nodejs</td>
                                  <td colspan="2">了解nodejs的环境布置，开发和调试的整体流程，熟悉express，了解socket.io，熟练使用sublime和webstorm等工具进行相关开发，了解npm的使用，了解coffeescript，less等基于nodejs的前端预编译语言使用,了解grunt的自动构建工具的用法
                                  </td>
                              </tr>

                              <tr>
                                  <td rowspan="3">PHP</td>
                                  <td>base</td>
                                  <td colspan="2">了解PHP+MYSQL编程，了解php的面向对象编程，熟悉php的模板(smarty)编程</td>
                              </tr>
                              <tr>
                                  <td>database</td>
                                  <td colspan="2">熟悉MYSQL数据库开发，配置、维护、性能优化，了解mongodb和sqlite的一般使用
                                  </td>
                              </tr>
                              <tr>
                                  <td>libs&framework</td>
                                  <td colspan="2">了解thinkPHP，Yii等PHP经典MVC框架的使用和配置，了解wordpress的基本开发
                                  </td>
                              </tr>

                              <tr>
                                  <td rowspan="3">Python</td>
                                  <td>base</td>
                                  <td colspan="2">了解Python的语法结构以及常用库，能基本使用各种Python标准库</td>
                              </tr>
                              <tr>
                                  <td>libs&framework</td>
                                  <td colspan="2">了解HTTP协议，能基于Django进行相关web开发
                                  </td>
                              </tr>


                          </tbody>
                      </table>
          </div>
          <div class="span1"></div>
        </div>

			</div>
        </div><!-- /.pricing-inner -->
    </div>
</div><!-- /.pricing-wrapper -->


<div id="nav-about" class="testimonials-wrapper">
    <div class="testimonials">
		<div class="container">
		    <h2>建站宣言</h2>

			<div class="cycle-slideshow-vertical" data-cycle-swipe="true">
				<div class="slide">
					<div class="container">
						<div class="testimonials-inner">
							<div class="span2 testimonials-image item">
								<img class="testimonials-image-box lazy" src="assets/img/tkfz.png" alt="">
							</div><!-- /.testimonials-image -->
							<blockquote class="span6 item">
								<p><b>写在前面:</b>正所谓不想当妈咪的小姐都不是好码农，在争取早日赎身从良的奋斗路上，不断尝试，不断汲取新知识是作为一个合格码农的基本修养，本站秉承开放探索创新的原则，初定每半年更新一版，及时呈现自己掌握的web小技巧和小创意，还望诸位道友多多支持!!</p>
							</blockquote>
						</div><!-- /.testimonials-inner -->
					</div><!-- /.container -->
				</div><!-- /.slide -->

				<div class="slide">
					<div class="container">
						<div class="testimonials-inner">
							<div class="span2 testimonials-image item">
								<img class="testimonials-image-box lazy" src="assets/img/gdg-logo.png" alt="">
							</div><!-- /.testimonials-image -->
							<blockquote class="span6 item"><p>本站开发主要采用html5+php+bootstrap组合技术，日后也会尽可能成为尝试不同web新技术的试验平台，html5被W3C誉为是"开放的Web网络平台的奠基石"，相信随着各大浏览器厂商的逐步跟进，它在未来的发展前途会越来越好，精彩不断。</p>
							</blockquote>
						</div><!-- /.testimonials-inner -->
					</div><!-- /.container -->
				</div><!-- /.slide -->
			</div><!-- /.cycle-slideshow-vertical -->

            <div class="cycle-pager cycle-vertical-pager"></div>
		</div><!-- /.container -->
    </div><!-- /.testimonials -->
</div><!-- /.testimonials-wrapper -->

<hr>

<div class="container">
    <h2 class="page-header">帝都高频出没地</h2>

    <ul class="thumbnails">
        <li class="span4">
            <div class="thumbnail">
                <a href="#">
                    <img class="lazy" data-original="assets/pictures/1.jpg" alt="">
                </a>
                <h3>知春路</h3>
            </div><!-- /.thumbnail -->
        </li><!-- /.span3 -->

        <li class="span4">
            <div class="thumbnail">
                <a href="#">
                    <img class="lazy" data-original="assets/pictures/2.jpg" alt="">
                </a>
                <h3>回龙观</h3>
            </div><!-- /.thumbnail -->
        </li><!-- /.span3 -->

        <li class="span4">
            <div class="thumbnail">
                <a href="#">
                    <img class="lazy" data-original="assets/pictures/3.jpg" alt="">
                </a>
                <h3>中关村</h3>
            </div><!-- /.thumbnail -->
        </li><!-- /.span3 -->

    </ul><!-- /.thumbnails -->
</div><!-- /.container -->

<div class="our-partners-wrapper">
    <div class="our-partners container">
        <div class="our-partners-inner">
            <h2>感谢以下伴随我一道成长的小伙伴们</h2>

            <div class="row">
                <div class="span3 center">
                    <a href="http://github.com/" target="_blank"><img class="our-partners-logo lazy" data-original="assets/img/github.jpg" alt="github"></a>
                </div><!-- /.span3 -->

                   <div class="span3 center">
                  <a href="http://www.youku.com/" target="_blank"><img class="our-partners-logo lazy" data-original="assets/img/youku.jpg" alt="youku"></a>
                </div><!-- /.span3 -->

                <div class="span3 center">
                  <a href="http://www.w3cfuns.com/" target="_blank"><img class="our-partners-logo lazy" data-original="assets/img/w3cfuns.jpg" alt="w3cfuns"></a>
                </div><!-- /.span3 -->

               <div class="span3 center">
                  <a href="http://www.jq-school.com/" target="_blank"><img class="our-partners-logo lazy" data-original="assets/img/jqschool.jpg" alt="jqschool"></a>
                </div><!-- /.span3 -->

            </div><!-- /.row -->
        </div><!-- /.our-partners-inner -->
    </div><!-- /.our-partners -->
</div><!-- /.our-partners-wrapper -->

<div id="nav-contact" class="footer-wrapper">
    <div class="footer container">
        <div class="footer-inner">
            <div class="row">
                <div class="item span5">
                    <h2>联系方式</h2>

                    <address>
                        <i class="icon icon-normal-clock"></i><span class="title"><strong>当前版本</strong></span>
						<p>Beta V <?php echo $version ?></p>
                    </address>

                    <address>
                        <i class="icon icon-normal-house"></i><span class="title"><strong>常居地址</strong></span>

                        <p>北京市海淀区中关村东路</p>

                        <p>北京市昌平区回龙观新龙城</p>
                    </address>




                    <address>
                        <i class="icon icon-normal-smartphone"></i><span class="title"><strong>联系方式</strong></span>
						<p>微博：@太空飞猪</p>
                        <p>邮箱：497761497@qq.com</p>
						<p>Github：taikongfeizhu@163.com</p>
                    </address>

                </div><!-- /.item -->

                <div class="item span7">

                    <div id="map" style="margin-top: 30px;">
<iframe width="625" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://ditu.google.cn/maps?f=q&amp;source=s_q&amp;hl=zh-CN&amp;geocode=&amp;q=%E5%8C%97%E4%BA%AC%E6%B5%B7%E6%B7%80%E5%8C%BA%E7%9F%A5%E6%98%A5%E8%B7%AF&amp;aq=&amp;sll=39.976531,116.335925&amp;sspn=0.01766,0.042186&amp;brcurrent=3,0x35f053b5bd1f38b9:0x998bd5907e3f5486,0,0x35f05137c865ad63:0xd348af83c67dc389%3B5,0,0&amp;ie=UTF8&amp;hq=&amp;hnear=%E5%8C%97%E4%BA%AC%E6%B5%B7%E6%B7%80%E5%8C%BA%E7%9F%A5%E6%98%A5%E8%B7%AF&amp;t=m&amp;ll=39.982842,116.33543&amp;spn=0.026307,0.053558&amp;z=14&amp;output=embed"></iframe>
                    <address>
                        <i class="icon icon-normal-map-pointer"></i>
                        <a target="_blank" class="btn btn-grey" href="http://ditu.google.cn/maps?q=%E5%8C%97%E4%BA%AC%E6%B5%B7%E6%B7%80%E5%8C%BA%E7%9F%A5%E6%98%A5%E8%B7%AF&hl=zh-CN&ie=UTF8&sll=39.976478,116.339964&sspn=0.00883,0.021093&brcurrent=3,0x35f053b5bd1f38b9:0x998bd5907e3f5486,0,0x35f05137c865ad63:0xd348af83c67dc389%3B5,0,0&hnear=%E5%8C%97%E4%BA%AC%E6%B5%B7%E6%B7%80%E5%8C%BA%E7%9F%A5%E6%98%A5%E8%B7%AF&t=m&z=15">
                        Show on Google
                        maps</a>
                    </address>
                    </div><!-- /#map -->
                </div><!-- /.item -->
            </div><!-- /.row -->
        </div><!-- /.footer-inner -->
    </div><!-- /.footer -->



    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="copyright span9">
                    &copy;  <?php echo $year ?>自豪地采用<a href="http://www.bootcss.com/" class=""  target="_blank">Bootstrap</a> <a class="btn btn-grey" href="http://weibo.com/taikongfeizhu"  target="_blank"><strong>互粉下呗</strong></a>
                </div><!-- /.copyright -->

                <div class="icons">
                    <div class="ercodeBox">
                        <a href="javascript:void(0);" id="weixin_btn" class="social-icon" target="_blank"><img src="assets/icons/weixin.png" alt=""></a>
                        <div class="ercode-contains">
                            <div class="ercode-pic"><img src="assets/img/weixin_ercode.jpg"/></div>
                            <div class="ercode-arrow"></div>
                        </div>
                    </div>

                    <div class="ercodeBox">
                        <a href="javascript:void(0);" id="weibo_btn" class="social-icon" target="_blank"><img src="assets/icons/weibo.png" alt=""></a>
                        <div class="ercode-contains">
                            <div class="ercode-pic"><img src="assets/img/weibo_ercode.jpg"/></div>
                            <div class="ercode-arrow"></div>
                        </div>
                    </div>
                </div><!-- /.icons -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer bottom -->
</div><!-- /.footer-wrapper -->
	<script type="text/javascript" src="assets/js/modernizr-2.6.2.min.js"></script>
	<script type="text/javascript" src="assets/js/retina.js"></script>
	<script type="text/javascript" src="assets/js/kinetic.js"></script>
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/placeholder.js"></script>
	<script type="text/javascript" src="assets/js/countdown.js"></script>
	<script type="text/javascript" src="assets/js/jquery.cycle2.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.cycle2.carousel.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.cycle2.center.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.cycle2.scrollVert.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.cycle2.swipe.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.cycle2.caption2.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="assets/js/jquery.localscroll-1.2.7-min.js"></script>
	<script type="text/javascript" src="assets/fancybox/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="assets/fancybox/helpers/jquery.fancybox-media.js"></script>
	<script type="text/javascript" src="assets/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="assets/js/jQuery.nicescroll.js"></script>
    <script type="text/javascript" src="assets/js/jquery.hoverIntent.js"></script>
    <script type="text/javascript" src="assets/js/jquery.lazyload.js"></script>
	<script type="text/javascript" src="assets/js/infine.js"></script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=28720163" charset="UTF-8"></script>
</body>
</html>

