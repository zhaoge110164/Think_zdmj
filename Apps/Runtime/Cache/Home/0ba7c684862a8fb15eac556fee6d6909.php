<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="description" content="时来运来免费在线算命，占卜，八字，生辰八字，生男生女预测，日干，称骨，黄历，生肖，姓名，星座，黄道吉日，恋爱预测，恋爱测算，
  星座运势，抽签，眼皮跳，指纹算命"/>
  <meta name="keywords" content="时来运来,免费在线算命，占卜，八字，日干，称骨，黄历，生肖，姓名，星座"/>
<title>时来运来-在线算命-解梦-星座</title>
<link rel="stylesheet" type="text/css" href="__ROOT__/Public/css/css.css" />
  <script src="__ROOT__/Public/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="__ROOT__/Public/js/main.js" type="text/javascript"></script>
</head>
<body id="body">
<div id="head" class="layout">
<iframe style="float: left" allowtransparency="true" frameborder="0" width="290" height="80" scrolling="no" src="http://tianqi.2345.com/plugin/widget/index.htm?s=1&z=1&t=0&v=0&d=2&bd=0&k=&f=&q=1&e=1&a=1&c=54511&w=290&h=96&align=center">
</iframe>
<?php if($_SESSION[jinrihuangli]['gongli']!=''): ?><div style="float:left;margin: 10px">
    <table id="top_menu_table" style="font-family: 楷体 " >
        <tr>
            <td style="background-color: transparent ; border: none ">公历:<?php echo ($_SESSION[jinrihuangli]['gongli']); ?>&nbsp农历:<?php echo ($_SESSION[jinrihuangli]['nongli']); ?>&nbsp</td>
            <td style="background-color: transparent ; border: none"><?php echo ($_SESSION[jinrihuangli]['suici']); ?>&nbsp</td>
        </tr>
    <tr>
        <td class="green" style="background-color: transparent ; border: none;"  >宜:<?php echo ($_SESSION[jinrihuangli]['yi']); ?>&nbsp</td>
        <td class="red"style="background-color: transparent ; border: none" >忌:<?php echo ($_SESSION[jinrihuangli]['ji']); ?>&nbsp</td>
    </tr>
        <tr>
            <td class="red"style="background-color: transparent ; border: none">冲:<?php echo ($_SESSION[jinrihuangli]['cong']); ?>&nbsp</td>
        </tr>

</table>
</div><?php endif; ?></div>
<div id="topmenu" class="layout"><script type="text/javascript">
    /*主菜单鼠标经过的变化*/
    $(function () {
        $(".button").hover(
                function () {
                    $(this).addClass("hover");
                    $(this).removeClass("button")
                },
                function () {
                    $(this).removeClass("hover");
                    $(this).addClass("button");
                }
        )
    })

</script>
<table id="top_menu" align="center">

    <tr>
        <td class="top" id="top_menu_main"><a href="<?php echo U('home/index/index');?>"><button class="button" >网站首页</button></a></td>
        <td class="top" id="top_menu_1"><a href="<?php echo U('home/ctsm/index');?>"><button class="button">传统算命</button></a></td>
        <td class="top" id="top_menu_2"><a href="<?php echo U('home/sxxzxx/index');?>"><button class="button"> 生肖/星座/血型</button></a></td>
        <td class="top" id="top_menu_3"><a href="<?php echo U('home/cqczjm/index');?>" ><button class="button">抽签/测字/解梦</button></a></td>
        <td class="top" id="top_menu_4"><a href="<?php echo U('home/qinglv/index');?>" ><button class="button">恋爱指南</button></a></td>
        <td class="top" id="top_menu_5"><a href=" <?php echo U('home/yuce/index');?>"><button class="button">民俗预测</button></a></td>
        <td class="top" id="top_menu_x"><a href="index.php?g=home&m=yuce&a=index&sm=6"><button class="button">黄道吉日</button></a></td>
    </tr>

</table>
<hr/></div>
<div id="bodydiv" class="layout">
<div id="left" class="layout"><?php if(mokuai() == 'ctsm' || mokuai() == 'index' ): ?><div id="div_li1" class="menu" style="position:relative" >
    <input id="hidval1" type="hidden" value="0"/>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/scbz');?>">生辰八字</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/bzcs');?>">八字测算</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/rglm');?>">日干论命</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/cglm');?>">称骨论命</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/xmcs');?>">姓名测试</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/xmpd');?>">姓命配对</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/sbwr');?>">上辈为人</a></li>
       <li class="second_li"><a  href="<?php echo U('home/ctsm/xsqy');?>">姓氏起源</a></li>
   </div>
<hr class="left_hr"align="left"/><?php endif; ?>
<?php if(mokuai() == 'sxxzxx' || mokuai() == 'index' ): ?><div id="div_li2" class="menu" >
       <input id="hidval2" type="hidden" value="0"/>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=bj">星座保健</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=eq">星座EQ</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=iq">星座IQ</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=mr">星座名人</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=sy">星座失败教训</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=sl">星座实力</a></li>
       <li class="second_li"><a href="index.php?g=home&m=sxxzxx&a=other&str=jy">星座5大建议</a></li>
       <li class="second_li"><a href="<?php echo U('home/sxxzxx/xzyc');?>">星座运程</a></li>
      </div>
<hr class="left_hr"align="left"/><?php endif; ?>
<?php if(mokuai() == 'cqczjm' || mokuai() == 'index' ): ?><div id="div_li3" class="menu" value="0">
        <input id="hidval3" type="hidden" value="0"/>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=1" >关帝神签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=2" >观音灵签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=3" >黄大仙灵签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=4" >吕祖灵签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=5" >天后灵签</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=6" >诸葛神算</a></li>
       <li class="second_li"><a href="index.php?g=home&m=cqczjm&a=index&sm=7" >周公解梦</a></li>
      </div>
<hr class="left_hr"align="left"/><?php endif; ?>
<?php if(mokuai() == 'qinglv' || mokuai() == 'index' ): ?><div id="div_li4"class="menu" value="0">
       <input id="hidval4" type="hidden" value="0"/>
       <li class="second_li"><a href="index.php?g=home&m=qinglv&a=index&sm=1"> 星座组合</a></li>
       <li class="second_li"><a href="index.php?g=home&m=qinglv&a=index&sm=2">姓名配对</a></li>
       <li class="second_li"><a href="index.php?g=home&m=qinglv&a=index&sm=3">QQ缘分</a></li>
       <li class="second_li"><a href="index.php?g=home&m=qinglv&a=index&sm=4">生肖血型</a></li>
       <li class="second_li"><a href="index.php?g=home&m=qinglv&a=index&sm=5">姓名五格</a></li>
      </div>

<hr class="left_hr" align="left"/><?php endif; ?>
<?php if(mokuai() == 'yuce' || mokuai() == 'index' ): ?><div id="div_li5"class="menu" value="0">
       <input id="hidval5" type="hidden" value="0"/>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=1" >耳鸣</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=2" >面热</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=3" >面热</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=4" >眼跳</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=5" >心惊</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=6" ><span  id="left_hdjr">黄道吉日</span></a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=7" >QQ/手机号码吉凶</a></li>
       <li class="second_li" ><a href="index.php?g=home&m=yuce&a=index&sm=8" >三世财运</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=9" >生男生女</a></li>
       <li class="second_li"><a href="index.php?g=home&m=yuce&a=index&sm=10" >指纹</a></li>
      </div><?php endif; ?></div>
<div id="mid" class="layout">

<table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
    <tbody>
    <tr>
        <td colspan="5" >
            <table height='100%' width="100%" border="0" cellpadding="0" cellspacing="0"  style="border:1px 0 1px 0; table-layout:fixed;word-wrap:break-word;">

            <tr>
                <td></td>
                <td align="center" ><font >繁体</font></td>
                <td align="center" ><font >拼音</font></td>
                <td align="center" ><font >康熙笔划</font></td>
                <td align="center" ><font >字意五行</font></td>
            </tr>
            <tr>
                <td  align="center"  class="new2"><?php echo ($xing1); ?></td>
                <td align="center"  class="new2"><font ><?php echo (gbtobig($xing1)); ?></font></td>
                <td align="center"  class="new2"><font ><?php echo (pinyin($xing1)); ?></font></td>
                <td align="center"  class="new2"><?php echo (getnum($xing1)); ?></td>
                <td align="center"  class="new2"><?php echo (getzywh($xing1)); ?></td>
            </tr>
            <tr>
                  <td align="center"  class="new2"><?php echo ($xing2); ?></td>
                <td align="center"  class="new2"><font ><?php echo (gbtobig($xing2)); ?></font></td>
                <td align="center"  class="new2"><font ><?php echo (pinyin($xing2)); ?></font></td>
                <td align="center"  class="new2"><?php echo (getnum($xing2 )); ?></td>
                <td align="center"  class="new2"><?php echo (getzywh($xing2)); ?></td>
            </tr>
            <tr>
                <td align="center"  class="new2"><?php echo ($ming1); ?></td>
                <td align="center"  class="new2"><font ><?php echo (gbtobig($ming1)); ?></font></td>
                <td align="center"  class="new2"><font ><?php echo (pinyin($ming1)); ?></font></td>
                <td align="center"  class="new2"><?php echo (getnum($ming1 )); ?></td>
                <td align="center"  class="new2"><?php echo (getzywh($ming1)); ?></td>
            </tr>
          <tr>
                <td align="center"  class="new2"><?php echo ($ming2); ?></td>
                <td align="center"  class="new2"><font ><?php echo (gbtobig($ming2)); ?></font></td>
                <td align="center"  class="new2"><font ><?php echo (pinyin($ming2)); ?></font></td>
                <td align="center"  class="new2"><?php echo (getnum($ming2 )); ?></td><td align="center"  class="new2"><?php echo (getzywh($ming2)); ?></td>
            </tr>

        </table></td>
        <td width="25%"  class="new2" align="center" >天格-&gt; <?php echo ($tiange); ?> (<?php echo (getsancai($tiange)); ?>)<br />
            <p>人格-&gt; <?php echo ($renge); ?> (<?php echo (getsancai($renge)); ?>)</p>        <p>地格-&gt; <?php echo ($dige); ?> (<?php echo (getsancai($dige)); ?>)</p></td>
        <td width="25%"  class="new2" align="center" >外格-&gt; <?php echo ($waige); ?> (<?php echo (getsancai($waige)); ?>)<br />
            <p>　</p>        <p>总格-&gt; <?php echo ($zhongge); ?> (<?php echo (getsancai($zhongge)); ?>)</p></td>
    </tr>
    </tbody>
</table><table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
    <tr>
        <TD class=ttd><p><font color="#0000FF">天格<?php echo ($tiange); ?>的解析：</font><font color="#ff0000">天格数是先祖留传下来的，其数理对人影响不大。</font>
        </TD>
    </tr>
    <tr>
        <TD class=ttd>
            <?php echo ($tgyy); ?>&nbsp;<font color=red>(<?php echo ($tgjx); ?>)</font></TD>
    </tr> <tr>
        <TD class=ttd>→ 详细解释：
            <br />
            <?php echo ($tgxx); ?></TD>
    </tr>      <tr>
        <TD class=ttd><p><font color="#0000FF">人格<?php echo ($renge); ?>的解析：</font><font color="#ff0000">人格数又称主运，是整个姓名的中心点，影响人的一生命运。</font>
        </TD>
    </tr>
    <tr>
        <TD class=ttd>
            <?php echo ($rgyy); ?>&nbsp;<font color=red>(<?php echo ($rgjx); ?>)</font></TD>
    </tr> <tr>
        <TD class=ttd>→ 详细解释：
            <br />
            <?php echo ($rgxx); ?></TD>
    </tr>  <tr>
        <TD class=ttd><p><font color="#0000FF">地格<?php echo ($dige); ?>的解析：</font><font color="#ff0000">地格数又称前运，影响人中年（36岁）以前的活动力。</font>
        </TD>
    </tr>
    <tr>
        <TD class=ttd>
            <?php echo ($dgyy); ?>&nbsp;<font color=red>(<?php echo ($dgjx); ?>)</font></TD>
    </tr> <tr>
        <TD class=ttd>→ 详细解释：
            <br />
            <?php echo ($dgxx); ?></TD>
    </tr> <tr>
        <TD class=ttd><p><font color="#0000FF">总格<?php echo ($zhongge); ?>的解析：</font><font color="#ff0000">总格又称后运，影响人中年（36岁）以后的命运。</font>
        </TD>
    </tr>
    <tr>
        <TD class=ttd>
            <?php echo ($zgyy); ?>&nbsp;<font color=red>(<?php echo ($zgjx); ?>)</font></TD>
    </tr> <tr>
        <TD class=ttd>→ 详细解释：
            <br />
            <?php echo ($zgxx); ?></TD>
    </tr> <tr>
        <TD class=ttd><p><font color="#0000FF">外格<?php echo ($waige); ?>的解析：</font><font color="#ff0000">外格又称变格，影响人的社交能力、智慧等，其数理不用重点去看。</font>
        </TD>
    </tr>
    <tr>
        <TD class=ttd>
            <?php echo ($wgyy); ?>&nbsp;<font color=red>(<?php echo ($wgjx); ?>)</font></TD>
    </tr> <tr>
        <TD class=new>→ 详细解释：
            <br />
            <?php echo ($wgxx); ?></TD>
    </tr>
    </TBODY>
</TABLE>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
    <tr>
        <TD class=ttd>

            <font color="#0000FF">对三才数理的影响:</font> 您的姓名三才配置为：<font color="#ff0000"><?php echo ($sancai); ?></font>。它具有如下数理诱导力，据此会对人生产生一定的影响。</TD>
    </tr><tr><td class=ttd><?php echo ($scyy); ?> (<?php echo ($scjx); ?>)
    </td></tr><tr><td class=new><?php echo ($sancaicontent); ?>
    </td></tr>
    </TBODY>
</TABLE>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
    <tr>
        <TD width="24%" class=ttd>
            <font color="#0000FF">对基础运的影响:</font></TD>
        <TD width="76%" class=ttd><?php echo ($jcy); ?> <?php echo ($jcyjx); ?></TD>
    </tr><tr><td class=ttd>
        <font color="#0000FF">对成功运的影响:</font></td>
        <td class=ttd><?php echo ($cgy); ?> <?php echo ($cgyjx); ?></td>
    </tr>
    <tr><td class=ttd>
        <font color="#0000FF">对人际关系的影响:</font></td>
        <td class=ttd><?php echo ($rjgx); ?> <?php echo ($rjgxjx); ?></td>
    </tr><tr><td class=new>
        <font color="#0000FF">对性格的影响:</font></td>
        <td class=new><?php echo ($xg); ?></td>
    </tr>
    </TBODY>
</TABLE><table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
    <tr>
        <TD width="24%" class=ttd>
            <font color="#0000FF">人格<?php echo ($renge); ?>有以下数理暗示:</font></TD>
        <TD width="76%" class=ttd><?php echo ($rgas); ?></TD>
    </tr><tr><td class=ttd>
        <font color="#0000FF">地格<?php echo ($dige); ?>有以下数理暗示:</font></td>
        <td class=ttd><?php echo ($dgas); ?></td>
    </tr>
    <tr><td class=ttd>
        <font color="#0000FF">总格<?php echo ($zhonggee); ?>有以下数理暗示:</font></td>
        <td class=ttd><?php echo ($zgas); ?></td>
    </tr><tr><td class=new>
        <font color="#0000FF">地格<?php echo ($waigee); ?>有以下数理暗示:</font></td>
        <td class=new><?php echo ($wgas); ?></td>
    </tr>
    </TBODY>
</TABLE><table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
    <tr>

        <TD width="67%" class=new>总评及建议：<br /><br />
            <?php if($xmdf < 60): ?>你的名字可能不是很好。强烈建议你换个名字试试，也许人生会因此而改变的。
            <?php elseif(($xmdf < 70) and ($xmdf >= 60)): ?>
            你的名字可能不太好，如果可能的话，不妨尝试改变一下，也许会有事半功倍之效。
            <?php elseif(($xmdf < 80) and ($xmdf >= 70 )): ?>你的名字可能不太理想，要想赢得成功，必须比别人付出更多的艰辛和汗水。如果有条件，改个名字也未尝不可。
            <?php elseif( ($xmdf < 80) and ($xmdf >= 70)): ?>你的名字一般。虽然人生路途中会遇到一些困难，但只要努力，还是会有很多收获的。如果有条件，改个名字也未尝不可。
            <?php elseif(($xmdf < 90) and ($xmdf >= 80) ): ?>
            你的名字取得不错，如果与命理搭配得当，相信它会助你一生顺利的，祝你好运！
            <?php elseif($xmdf >= 90): ?>
            你的名字取得非常棒，如果与命理搭配得当，成功与惊喜将会伴随你的一生。但千万注意不要失去上进心。<?php endif; ?>
            <br><br>
            姓名五格评分：</font><span class=pf><?php echo ($xmdf); ?>分</span> </TD>
    </tr>
    </TBODY>
</TABLE>
</div>
<div id="right" class="layout"></div>
</div>
<div id="foot" class="layout">
<h4 align="center">免责声明：</h4>
<p align="center">1.本站算命系统来源于中国民俗学的一些测算方法，并非科学研究成果，仅供休闲娱乐，请勿迷信，按此操作一切后果自负！</p>
<p align="center">2.任何人均不得将本算命系统用于任何非法用途，且必须自行承担因使用本系统带来的任何后果和责任。</p>
<p align="center"> 祝您在本站玩的愉快，且每日吉星高照！希望您把本站推荐给朋友，或者链接到您的网页和博客上，谢谢!
联系站长   Email:zhaoge110164@163.com  <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=120286418&site=qq&menu=yes">
 <img border="0" src="http://wpa.qq.com/pa?p=2:120286418:51" alt="联系站长" title="联系站长" style="border: none"/>
</a>
 <p align="center"> 京ICP备XXXXXXXX号</p></div>
</body>
</html>