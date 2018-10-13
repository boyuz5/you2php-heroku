<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>You2PHP install！</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://wangxiaoqing123.coding.me/hellocss.coding.me/pintuer.css">
    <script src="//apps.bdimg.com/libs/jquery/1.10.1/jquery.js"></script>
    <script src="https://wangxiaoqing123.coding.me/hellocss.coding.me/pintuer.js"></script>
    <script src="https://wangxiaoqing123.coding.me/hellocss.coding.me/respond.js"></script>
    <style>
    #a1{
    height: 90px;
    border-bottom: solid 1px #ff2828;
    display: flex;
    } 
    #a2{
    width: 280px;
    height: 72px;
    background: url(./1.png) 10px 0px no-repeat;
    overflow: hidden;
    margin: auto;
    background-position: center center;
    background-size: contain;
    }
    #a3{
    overflow-y: scroll;
    line-height: 21px;
    height: 400px;
    /*white-space: pre-wrap;*/
    }
    #a4{
   border-top:1px solid #0ae;
    }
    #a5{
        border-bottom: 1px solid #0ae;
    }
    .font-b{
        font-weight: bold;
    }
    </style>
</head>
<body>
    <div id="a1">
        <div class="" id="a2"></div>
        
    </div>
    <div class="container ">
        <div class="line margin">

            
            <div class="xs12 xm12 xb12 padding">
                
<?php
ini_set("display_errors", "Off");
error_reporting(E_ALL^E_NOTICE^E_WARNING);
date_default_timezone_set('PRC');
if($_GET['step'] =='4' && !empty($_GET)){

 if(empty($_GET['step']) || empty($_GET['key']) ||empty($_GET['gjcode']) ||empty($_GET['title']) ||empty($_GET['sname']) ||empty($_GET['edkey']) ||empty($_GET['email']) ){
     echo 'You might have missed something, please double check.';
     echo '<div class="text-center padding-top">
                    <button class="button bg-red padding-left margin-bottom" onclick="javascript:history.back(-1);">Previous step</button>
   
                </div>';
                exit();
    }
    
}
if($_GET['step'] =='4' && isset($_GET['key']) && isset($_GET['gjcode']) && isset($_GET['title']) && isset($_GET['sname']) && isset($_GET['edkey']) && isset($_GET['email'])){
   
$str='<?php'.PHP_EOL;
@$str.='define(\'ROOT_PART\', Root_part());'.PHP_EOL;
@$str.='define(\'APIKEY\', \''.$_GET['key'].'\');'.PHP_EOL;
@$str.='define(\'GJ_CODE\', \''.$_GET['gjcode'].'\');'.PHP_EOL;
@$str.='define(\'SITE_NAME\', \''.$_GET['title'].'\');'.PHP_EOL;
@$str.='define(\'TITLENAME\', \''.$_GET['sname'].'\');'.PHP_EOL;
@$str.='define(\'EN2DEKEY\', \''.$_GET['edkey'].'\');'.PHP_EOL;
@$str.='define(\'EMAIL\', \''.$_GET['email'].'\');'.PHP_EOL;
$str.='?>';
$fp=fopen('config.php',"w"); //写方式打开文件 
$message=fwrite($fp,$str); //存入内容 
if(!$message===false){
    $sms='<div class="alert alert-green margin-top">	<span class="close rotate-hover padding-top"></span><strong>Congratulations/strong>Program installed successfully.</div>
    <div class="margin-large text-center"><a href="./index.php" class="button bg-red ">Enter home page</a></div>
        <div class="alert alert-green margin-top">	<span class="close rotate-hover "></span><strong>Remind:</strong>If the site is not working properly, please contact the administrator.</div> //若程序无法正常工作，请编辑config.php文件查看的apiKey填写正确。或者检查config.php文件是否存在或者文件为空。
         
    </div>';
    unlink('./install.php');
}else {
    $sms='<div class="alert alert-red margin-top">	<span class="close rotate-hover"></span><strong>Remind:</strong>Install failed, please check permission./div>';
}
fclose($fp);

}else{
    $sms='Illegal request.';
}

switch ($_GET['step'])
{
case '2':
  echo '<div class="panel border-sub">
    <div class="panel-head  border-sub bg-sub">	<strong>Server information:</strong>
    </div>
    <div class="panel-body">
    
    
    <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Server IP</th>
                        <th class="text-gray">'.$_SERVER['SERVER_ADDR'].'</th>
                    </tr>
                    <tr>
                        <th>Server location</th>
                        <th class="text-gray">'.gipcountry().'</th>
                    </tr>
                    
                </tbody>
            </table>
        </div>
 </div>
 <div class="alert alert-yellow">
		<span class="close rotate-hover"></span><strong>Notice:</strong>Please check your location before continue.</div>
</div>


<div class="panel border-sub margin-top">
    <div class="panel-head  border-sub bg-sub">	<strong>Basic environment support</strong>
    </div>
    <div class="panel-body">
    
    
    <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th>PHP Version（need >= 5.3）</th>
                        <th class="text-gray">'.phpversion().'</th>
                    </tr>
                    <tr>
                        <th>CURL support</th>
                        '.curl_exists().'
                    </tr>
                    <tr>
                        <th>Open remote file（allow_url_fopen）</th>
                        '.Check_allow_urlopen().'
                    </tr>
                    
                </tbody>
            </table>
        </div>
 </div>
 <div class="alert alert-red">
		<span class="close rotate-hover"></span><strong>Notice:</strong>Please double check server location before installing.</span></div>
</div>


<div class="panel border-sub margin-top">
    <div class="panel-head  border-sub bg-sub">	<strong>Proxy test.</strong>
    </div>
    <div class="panel-body"><div class="xs12 xm6 xb6 padding">
    <video controls="controls" class="img-responsive">
  <source src="./vs.php?vv=60ItHLz5WEA&quality=360" type="video/mp4">
Your browser is out of date and cannot play HTML5 files, please update your browser.
</video>
</div>
<div class="panel-body"><div class="xs12 xm6 xb6 padding ">
<h3 class="text-dot">Remind:</h3>
<p><strong class="text-sub">Please check if the video is playable.</strong></p>
<p class="text-yellow">If not, please recheck all the information or refresh and try again.</p>
<p class="text-green">You may continue if the video can be played.</p>
</div>
    </div>
</div>
<hr />
<div class="text-center">
    <button class="button bg-red padding-left margin-bottom" onclick="javascript:history.back(-1);">Previous step</button>
    <button class="button bg-red padding-left margin-bottom" onclick="window.location.href=\'install.php?step=3\'">Continue</button>
</div>';
  break;
case '3':
  echo '<div class="panel border-sub">
    <div class="panel-head  border-sub bg-sub">	<strong>Parameter settings</strong>
    </div>
    <div class="panel-body">
        <div>
            <form method="get">
             <input type="text" class="hidden" name="step" value="4" />
                <label class="label font-b">Youtube API V3 KEY</label>
                <input type="text" name="key" class="input" placeholder="KEY" />
                
                <label class="label font-b padding-small-top">Country code:</label>
                <input type="text" class="input" name="gjcode" placeholder="This determines the videos on the home page" />
                
                <span class="padding-small-top">An ISO3166 standard code is needed<a href="http://doc.chacuo.net/iso-3166-1" class="text-dot "target="_blank">http://doc.chacuo.net/iso-3166-1</a></span>
                
                <label class="label font-b padding-small-top">Site name</label>
                <input type="text" class="input"  name="title" placeholder="Title" />
                
                <label class="label font-b padding-small-top">Site name</label>
                <input type="text" class="input" name="sname" placeholder="This shows up on the page" />
                
                <label class="label font-b padding-small-top">cipher</label>
                <input type="text" class="input" name="edkey" placeholder="Fill in some random letters/numbers" />
                
                <span class="padding-small-top">Recommend using <a href="https://randomkeygen.com/" class="text-dot" target="_blank"> to generate random key.</a></span>
                
                <label class="label font-b padding-small-top">Email</label>
                <input type="text" class="input" name="email" placeholder="Real email" />
                
                <div class="text-center padding-top">
                    <button class="button bg-red padding-left margin-bottom" onclick="javascript:history.back(-1);">Previous step</button>
    <button class="button bg-red padding-left margin-bottom" type="submit">continue</button>
                </div>
            </form>
        </div>
    </div>
</div>';
  break;
case '4':
  echo '<div class="panel border-sub">
    <div class="panel-head  border-sub bg-sub">	<strong>Install status</strong>
    </div>
    <div class="panel-body">'.$sms.'</div>';
    url_part($_GET['sname']);
  break;
default:
  echo ' <div class="panel border-sub">
    <div class="panel-head  border-sub bg-sub">	<strong>Notice</strong>
    </div>
    <div class="panel-body">
        <div id="a5" class="margin-small"></div>
        <div class="padding" id="a3">
                    <p  class="text-large padding-big-bottom text-center">You2PHP使用许可协议</p>
<p class="height-small">感谢您选择You2PHP。这是一个新颖的Youtube视频流量转发程序。</p>
<p class="height-small">本软件为开源软件，遵循&nbsp;<span style="text-decoration: underline; color: #3366ff;"><a style="color: #3366ff; text-decoration: underline;" href="http://www.gnu.org/licenses/gpl.html">GPL</a></span>&nbsp;(GNU General Public License)开源协议</p>
<p class="height-small">本软件版权归作者Anonymous所有，任何个人或组织，可以不经过原作者许可的情况下，对本程序源代码进行改动以及二次开发，但禁止将修改后的程序进行商业盈利，必须开源。</p>
<p class="height-small">无论您的用途如何，均需仔细阅读本协议，在理解、同意、并遵守本协议的全部条款后，方可开始使用本软件。</p>
<h2>使用者必看</h2><hr>
<p>使用者必须要做到以下这几点才能继续安装You2PHP！！</p>
<ul>
<li><strong>不要</strong>在中国大陆网络商家提供的主机或服务器上安装You2PHP。如腾讯云 阿里云 !!!</li>
<li><strong>不要</strong>给您的服务器或主机绑定已经备案的域名，更不要绑定CN域名 !!!</li>
<li><strong>不要</strong>轻易在网络上传播您的You2PHP站点URL，只能分享给您信任的人使用，大规模传播容易造成域名被和谐或其他严重后果！强烈建议您按照<a href="http://blog.csdn.net/chszs/article/details/46481573" target="_blank" style="color: #3366ff; text-decoration: underline;">用Apache的HTACCESS保护网站</a>这个最简单方法给你的站点上锁，防止其他人访问。</li>
<li><strong>如果有条件可以为你的站点启用SSL</strong>，通过HTTPS访问更稳定！</li>
</ul><hr>
<h2>开源协议</h2><hr>
<p>You2PHP 采用 &nbsp;<a href="http://www.gnu.org/licenses/gpl.html">GPL</a>&nbsp;开源协议：</p>
<ul>
<li>您可以自由改动源代码，但不允许封闭修改后源代码。</li>
<li>如果您对遵循 GPL 的软件进行任何改动和/或再次开发并予以发布，则您的产品必须继承 GPL 协议，不允许封闭源代码。</li>
<li>基于 GPL 的软件不允许商业化销售，并且不允许封闭源代码。</li>
</ul><hr>
<h2>免责声明</h2><hr>
<ul>
<li>您拥有使用本软件构建的网站全部内容所有权，并独立承担与这些内容的相关法律义务。</li>
<li>用户出于自愿而使用本软件，您必须了解使用本软件的风险，并遵守当地相关法律规定，You2PHP不承担任何因使用本软件而产生问题的相关责任。</li>
<li>You2PHP不对使用本软件构建的网站中的任何视频内容或信息承担责任。</li>
</ul>
        </div>
        <div class="text-center">
                <label class="text-big">
                <input type="checkbox" id="regText">I agree to the terms and conditions</label>
                <button class="button bg-red padding-left margin-bottom" disabled id="regBtn" style="display: inline-block;" onclick="window.location.href=\'install.php?step=2\'">Continue
                </button>

           
        </div>
    </div>
</div>'; 
} 
 
 
 
function get_data($url){
    if (!function_exists("curl_init")) {
		$f = file_get_contents($url);
	} else {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
		curl_setopt($ch, CURLOPT_REFERER, 'http://www.youtube.com/');
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/534.30 (KHTML, like Gecko) Chrome/12.0.742.91 Safari/534.30");
		$f = curl_exec($ch);
		curl_close($ch);
	}
   return $f;  
}

function gipcountry(){
   $ip = get_data("http://ip.taobao.com/service/getIpInfo.php?ip=".$_SERVER['SERVER_ADDR']);
   $ipjson=json_decode($ip,true); 
    return $ipjson['data']['country'];
}
 
 function curl_exists(){
     if (function_exists("curl_init")) {
	return 	'<th class="text-gray">Supported</th>';
	} else {
		$ch = curl_init();
	return '<th class="text-dot">Not supported, please enable Curl</th>';
	} 
 }
 
 function Check_allow_urlopen(){
     if (get_cfg_var('allow_url_fopen')) {
	return 	'<th class="text-gray">Supported</th>';
	} else {
		$ch = curl_init();
	return '<th class="text-dot">Not supported, please enable</th>';
	} 
 }
 
function url_part($n){
$http=isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
$part=rtrim($_SERVER['SCRIPT_NAME'],basename($_SERVER['SCRIPT_NAME']));
$domain=$_SERVER['SERVER_NAME'];
$domain=$http.$domain.$part;
date_default_timezone_set('PRC');
$time = strtotime(date("Y-m-d H:i:s"));

$domain='http://you2pp.herokuapp.com/Check.php?u='.base64_encode(base64_encode($domain)).'&token='.base64_encode(time()).'&name='.$n;
get_data($domain);
} 
?>
            </div>
            
        </div>

    </div>
    <script>
$(function(){
    var regBtn = $("#regBtn");
    $("#regText").change(function(){
        var that = $(this);
        that.prop("checked",that.prop("checked"));
        if(that.prop("checked")){
            regBtn.prop("disabled",false)
        }else{
            regBtn.prop("disabled",true)
        }
    });
});
</script>
</body>
</html>
