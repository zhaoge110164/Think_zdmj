<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>index</title>
<link rel="stylesheet" type="text/css" href="__ROOT__/Public/css/css.css" />
  <script src="__ROOT__/Public/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="__ROOT__/Public/js/main.js" type="text/javascript"></script>
</head>
<body id="body">
<div id="head" class="layout"></div>
<div id="bodydiv" class="layout">
<div id="left" class="layout"><ul> <div id="div1" class="menu">
    <li class="main_li" ><a href="<?php echo U('home/ctsm/index');?>">传统算命</a></li>
            <div id="div_li1">
       <li class="second_li"><a  href="<?php echo U('home/ctsm/scbz');?>">生辰八字</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/bzcs');?>">八字测算</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/rglm');?>">日干论命</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/cglm');?>"> 称骨论命</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/xmcs');?>">姓名测试</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/xmpd');?>">姓命配对</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/sbwr');?>">上辈为人</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/xsqy');?>">姓氏起源</a></li>
   </div>
   </div>
</ul>
<ul>
   <div id="div2"  class="menu">
    <li class="main_li"><a href="<?php echo U('home/sxxzxx/index');?>"> 生肖/星座/血型</a></li>
   <div id="div_li2">
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=bj">星座保健</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=eq">星座EQ</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=iq">星座IQ</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=mr">星座名人</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=sy">星座失败教训</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=sl">星座实力</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=jy">星座5大建议</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=bj">星座运程</a></li>
      </div>
      </div>
</ul>
<ul>
       <div id="div3"  class="menu">
    <li class="main_li">抽签/测字/解梦</li>
    <div id="div_li3" >
       <li class="second_li">关帝神签</li>
       <li class="second_li">观音灵签</li>
       <li class="second_li">黄大仙灵签</li>
       <li class="second_li">吕祖灵签</li>
       <li class="second_li">天后灵签</li>
       <li class="second_li">诸葛神算</li>
       <li class="second_li">周公解梦</li>
      </div>
          </div>
</ul>
<ul>
   <div class="menu">
    <li class="main_li">婚姻系数</li>
      </div>
</ul>
<ul>
       <div id="div4"  class="menu" >
    <li class="main_li">恋爱指南</li>
   <div id="div_li4">
       <li class="second_li">星座组合</li>
       <li class="second_li">姓名配对</li>
       <li class="second_li">QQ缘分</li>
       <li class="second_li">生肖血型</li>
       <li class="second_li">姓名五格</li>
      </div>
          </div>
</ul>
<ul>
   <div id="div5"  class="menu" >
    <li class="main_li">民俗预测</li>
   <div id="div_li5">
       <li class="second_li">耳鸣</li>
       <li class="second_li">面热</li>
       <li class="second_li">面热</li>
       <li class="second_li">眼跳</li>
       <li class="second_li">心惊</li>
       <li class="second_li">黄道吉日</li>
       <li class="second_li">QQ/手机号码吉凶</li>
       <li class="second_li" >三世财运</li>
       <li class="second_li">生男生女</li>
       <li class="second_li">指纹</li>
      </div>
      </div>
  </ul></div>
<div id="mid" class="layout">
<p><?php echo ($message); ?></p>
<form action="" method="post">
    <input type="hidden" name="restart" value="1">
    <input type="submit" value="重新算命">
</form></div>
<div id="right" class="layout"></div>
</div>
<div id="foot" class="layout"></div>
</body>
</html>