<?php
session_start();
include_once("../include/config.php"); 
include_once("../common/login_check.php"); 
include_once("../include/mysqli.php");
include_once("../common/logintu.php");
include_once("../common/function.php");
include_once("../class/user.php");
$lm='ag3';
$uid = $_SESSION['uid'];
$loginid = $_SESSION['user_login_id'];
renovate($uid,$loginid);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="images/member.js"></script>
    <link type="text/css" rel="stylesheet" href="images/member.css"/>
</head>
<body>
    <div class="wrap">
        <?php include_once("agentsubmenu.php"); ?>
        <table cellspacing="1" cellpadding="0" border="0" class="tab1">
            <tr>
                <td>
                    <p>福运来彩票网：应广大客户需求，现与BBIN平台进行技术合作，为客户打造一个稳定，优质，安全的线上彩票娱乐投注平台；公司采用最为多元、 先进、公正的系统，在众多博彩网站中，我们自豪能为会员提供最优惠的回馈、为代理商创造强劲的营利优势!公司秉持商业联营、资源整合、利益共享的理念，与合作伙伴携手打造稳定利多的荣景。 无论您拥有的是网络资源，或是丰富的人脉，都欢迎您来加入我们的行列，无需承担任何费用， 即可开拓无上限的营收。福运来彩票网娱乐绝对是您最明智的选择!</p>
                    <p class="c_red">一、代理商注册规约</p>
                    <p>为防止代理滥用福运来彩票网所提供的代理优惠制度，我们将严格审核每位代理商申请注册时所提供的个人资料(包括 姓名、IP、住址、电邮信箱、电话、支付方式等等)。若经审核发现代理商有任何不良营利企图，或与其他代理 商、会员进行合谋套利等行为，福运来彩票网娱乐公司将关闭该合作代理商之账户、扣除账户中的本金，并收回该代理商 的所有佣金与优惠。 同一IP/同一姓名/同一收款账号的会员只能是一个合作代理商的下线，代理商本身不能成为其他代理商的下线会员。</p>
                    <p class="c_red">二、权责条款</p>
					 <p class="c_red">三、福运来彩票网对联盟伙伴的权利与义务</p>
                    <p>福运来彩票网的客服部门会登记合作代理商的下线会员并观察其投注状况。 代理商及会员皆须同意并遵守福运来彩票网的会员条例、政策及操作程序。 合作代理商可随时登入管理端接口观察其下线会员的下注状况与活动概况。 福运来彩票网保留所有对合作代理商或会员之账户加以拒绝或冻结的权利。 福运来彩票网有权修改合约书上之任何条例(包括:现有的佣金范围、佣金计划、付款程序、及参考计划条例等 等)，福运来彩票网公司会以电邮、网站公告等方法通知合作代理商。若代理商对于任何修改持有异议，可选择终止合 约、或洽客服人员提出意见。如代理商未提出异议，便视作默认合约修改，必须遵守更改后的相关规定。</p>
					 <p class="c_red">四、联盟伙伴对福运来彩票网的权力及义务</p>
                    <p>合作代理商应尽其所能，广泛地宣传、销售及推广福运来彩票网使代理商本身及 福运来彩票网的利润最大化。合作 代理商可在不违反法律的情况下，以正面形象宣传、销售及推广福运来彩票网， 并有责任义务告知旗下会员所有关于福运来彩票网的相关优惠条件及产品。 合作代理商选择推广福运来彩票网的手法若需付费，则代理商应自行承担该费用。 任何福运来彩票网的相关信息(包括：标志、报表、游戏画面、图样、文案等)，合作代理商不得私自复制、公开、 分发有关材料，福运来彩票网保留法律追诉权。如代理商在业务推广方面需要相关的技术支持， 欢迎随时洽询福运来彩票网客服人员。</p>
					 <p class="c_red">五、各项细则</p>
                    <p>各阶层合作代理商不可在未经福运来彩票网娱乐允许下开设双/多个代理账号， 也不可从福运来彩票网之游戏账户或其他相关人士赚取佣金。 请谨记任何代理商皆不能用代理帐户下注，福运来彩票网 有权终止并封存账号及其所有在游戏中赚取的佣金。</p>
                    <p>为确保所有福运来彩票网会员的账号隐私与权益， 福运来彩票网不会提供任何会员密码，或会员个人资料。 各阶层合作代理商亦不得以任何方式取得会员数据，或任意登入下层会员账号， 如发现代理商有侵害福运来彩票网会员隐私的行为， 福运来彩票网有权取消代理商之红利，并取消该名代理商之账号。</p>
                    <p>合作代理商旗下的会员不得开设多于一个的账户。福运来彩票网有权要求会员提供有效的身份证明以验证会员的身份， 并保留以IP判定会员是否重复注册的权利。如违反上述事项， 福运来彩票网有权终止玩家进行游戏并封存账号及所有于游戏中赚取的佣金。</p>
                    <p>如合作代理商旗下的会员因违反条例而被禁止使用福运来彩票网的游戏， 或福运来彩票网退回存款给会员， 福运来彩票网将不会分配相应的佣金给代理商。 如合作代理商旗下会员存款用的信用卡、银行资料须经审核，福运来彩票网将保留相关佣金直至审核完毕。</p>
                    <p>合约条件将于福运来彩票网正式接受合作代理商加入后开始生效。 福运来彩票网娱乐公司及代理商可随时终止此合约。 在任何情况下，代理商若欲终止合约，都必须以书面/电邮方式提早于七日内通知福运来彩票网。 代理商的表现将会每3个月审核一次，如代理商已不是现有的合作成员，则本合约书可以在任何时间终止。 如代理商违反合约条例，福运来彩票网有权立即终止合约。</p>
                    <p>在没有福运来彩票网的许可下， 代理商不能透露及授权福运来彩票网的相关机密资料， 包括代理商所获得的回馈、佣金报表、计算方式等；代理商有义务在合约终止后仍执行机密文件及数据的保密。 合约终止之后，代理商及福运来彩票网将不须履行双方的权利及义务。 终止合约并不会解除代理商于终止合约前所应履行的义务。</p>
                    
                </td>
            </tr>
        </table>
    </div>
    <?php include_once('../Lottery/r_bar.php') ?>
    <script type="text/javascript" src="/js/cp.js"></script>
    <script type="text/javascript" src="/js/left_mouse.js"></script>
</body>
</html>