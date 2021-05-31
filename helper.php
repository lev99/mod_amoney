<?php
/**
 * @package     AMoney
 * @subpackage  mod_amoney
 * @version     3.0
 * @author      Adeptus, adeptus@adeptsite.info
 * @copyright   Copyright (C) 2008 Adeptus. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
################################################################################
## Title............: AMoney                                                  ##
## Description......: Popular WebMoney module for Joomla CMS                  ##
## Author...........: Leonidas                                                ##
## Version..........: 2.0.0                                                   ##
## Created date.....: 24.05.2017                                              ##
## Contact info.....: url: foto-s.ru / e-mail: leonidas78@mail.ru     	      ##
## Joomla Version...: 2.5.х and 3.1.x Stable and high                         ##
## Note.............: This script is a part of AMoney 1.0 package.            ##
## Based............: on AMoney 1.0 by Adeptus[http://www.adeptsite.info]     ##
################################################################################

// no direct access
defined('_JEXEC') or die;

// Global
$mainframe = JFactory::getApplication();
// Link Site
$linkjuribase = $params->get('linkjuribase', 'true');
$mosConfig_live_site = JURI::base( $linkjuribase );

//css
$document = JFactory::getDocument();
$document->addStyleSheet($mosConfig_live_site.'modules/mod_amoney/css/templates.css');
//button
$am_button = $params->get('am_button', 'button');
///////////////////////////////
$characters = array(
"1","2","3","4","5","6","7","8","9","1","2","3",
"4","5","6","7","8","9","1","2","3","4","5","6",
"1","2","3","4","5","6","7","8","9");
$amonykeys = array();
while(count($amonykeys) < 7) {
$x = mt_rand(0, count($characters)-1);
if(!in_array($x, $amonykeys)) {
$amonykeys[] = $x;
}
}
$random_chars1 = '';
foreach($amonykeys as $amonykey){
$random_chars1 .= $characters[$amonykey];
}
//jQuery
if ($params->get('off_jquery1')==1) {
$document = JFactory::getDocument();
$document->addScript($mosConfig_live_site.'modules/mod_amoney/js/jquery-2.1.4.js' );
};
//tipsy - Facebook-style tooltip plugin for jQuery
if ($params->get('off_tipsy1')==1) {
$document = JFactory::getDocument();
$document->addScript($mosConfig_live_site.'modules/mod_amoney/js/jquery.tipsy.js', $type = "text/javascript", $defer = false, $async = true );
$document->addScript($mosConfig_live_site.'modules/mod_amoney/js/tipsy.js', $type = "text/javascript", $defer = false, $async = true );
$document->addStyleSheet($mosConfig_live_site.'modules/mod_amoney/css/tipsy.css' );
};
// Note: please refer: "Powered by Donate-Amoney" - not to remove, if you want to remove, please contact the author of the script!
$str2 = 'AMoney';
$str1 = 'http://foto-s.ru/newspage/joomla/universal-module';
$str4 = JText::_('MOD_AMONEY_VISIT_AUTHOR');
$copcop = '<a rel="nofollow" href="http://foto-s.ru/newspage/joomla/universal-module.html" title="'.$str4.'" rel="nofollow" target="_blank">'.$str2.'</a>';
if ($params->get('exterlink')==1) {
$copycopy='<a rel="nofollow" href="http://foto-s.ru/newspage/joomla/universal-module.html" title="'.$str4.'" rel="nofollow" target="_blank">'.$str2.'</a>';
$copy= $copycopy; }
else { $copy=""; };
$width_border = $params->get('width_border', '100');
$height_border = $params->get('height_border', '180');
$height_border1 = ($height_border - 18);
// Change the appearance of jQuery
if ($params->get('jfadtogquery')==1) {
$jfadtogquery='slideDown(500)';
$jammfadtogquery1='1';
} else {
$jfadtogquery='toggle(500)';
$jammfadtogquery1='0';
};
///////////////////////////////
$datename = $params->get('datename', 'Updated:');
$current1 = $params->get('current1', '3000');
$goal1 = $params->get('goal1', '10000');
$mycalendar = $params->get('mycalendar', '27-10-2009');
$whitebarheight = 100 - (($current1 / $goal1) * 100);
$bulbpercent = (($current1 / $goal1) * 100);
$rounded_number = round($bulbpercent);
if ($params->get('off_intrerst')==1) {
$off_intrerst = '<div class="karma1" style="text-align:center">';
$off_intrerst .= '<div class="karma2" style="text-align:center">';
$off_intrerst .= '<span class="letter3">$'.$goal1.'&nbsp;&nbsp;&nbsp;'.$rounded_number.'%&nbsp;&nbsp;&nbsp;$'.$current1.'</span>';
$off_intrerst .= '<div class="karma3 gray progress progress-danger" style="margin:0px auto 0px;">';
$off_intrerst .= '<div class="red bar" style="width: '.$rounded_number.'%;float: right;"></div>';
$off_intrerst .= '</div>';
$off_intrerst .= '<div class="karma4" style="text-align:center">';
$off_intrerst .= '<span class="letter">'.$datename.'&nbsp;&nbsp;'.$mycalendar.'</span>';
$off_intrerst .= '</div>';
$off_intrerst .= '</div>';
$off_intrerst .= '</div>';
} else {
$off_intrerst="";
};
//////////////////////////////////////////
$pretext = $params->get('pretext', '&#1041;&#1083;&#1072;&#1075;&#1086;&#1076;&#1072;&#1088;&#1085;&#1086;&#1089;&#1090;&#1100; &#1040;&#1074;&#1090;&#1086;&#1088;&#1091;');
$pretext5 = $params->get('pretext5', 'Donate');
$btntxt = $params->get('btntxt', '&#1054;&#1090;&#1087;&#1088;&#1072;&#1074;&#1080;&#1090;&#1100;');
$exterlink = $params->get('exterlink', 1);
// Switch to a fixed amount
if ($params->get('amofixed')==1) {
$amofixed='readonly="readonly"'; }
else { $amofixed=""; };
////////////////////////////////
$max_summallin = $params->get('max_summallin', '100');
$step_summallin = $params->get('step_summallin','0.01');
// Webmoney
$use_wm = $params->get('use_wm', 1);
$use_p1 = $params->get('use_p1', 1);
$wmr = $params->get('wmr','R000000000000');
$use_p2 = $params->get('use_p2', 1);
$wmz = $params->get('wmz','Z000000000000');
$use_p3 = $params->get('use_p3', 1);
$wme = $params->get('wme','E000000000000');
$use_p4 = $params->get('use_p4', 1);
$wmu = $params->get('wmu','U000000000000');
$use_p5 = $params->get('use_p5', 1);
$wmb = $params->get('wmb','B000000000000');
$wm_summ = $params->get('wm_summ', '10');
$wm_val_on = $params->get('wm_val_on', '0');
$wm_cur_val = $params->get('wm_cur_val');
if ($params->get('off_znahsum')==1) {
$document = JFactory::getDocument();
$buffer=$document->getBuffer(component);
$pattern = '|<span class="chislo">(.*)</span>|isU';
preg_match($pattern, $buffer, $matches);
$all_summwm = $matches[1];
} else {
$all_summwm = $wm_summ;
};
$wm_successurl = $params->get('wm_successurl', JURI::base( true ));
$wm_errorurl = $params->get('wm_errorurl', JURI::base( true ));
$wm_url_adds = "https://merchant.webmoney.ru/lmi/payment.asp";
$wm_descpay = $params->get('wm_descpay','Gratitude to the Author');
$mmdescription = $params->get('mmdescription','Order in this store-syakom');
$mmmessage = $params->get('mmmessage','Pokupua so-so stuff');
$egoldinfo = $params->get('egoldinfo','');
if ($params->get('gost5')==1) {
$gost5 = array(
"А"=>"A","Б"=>"B","В"=>"V","Г"=>"G","Д"=>"D","Е"=>"E","Ё"=>"YE","Ж"=>"ZH",
"З"=>"Z","И"=>"I","Й"=>"YI","К"=>"K","Л"=>"L","М"=>"M","Н"=>"N","О"=>"O",
"П"=>"P","Р"=>"R","С"=>"S","Т"=>"T","У"=>"U","Ф"=>"F","Х"=>"H","Ц"=>"TS",
"Ч"=>"CH","Ш"=>"SH","Щ"=>"SCH","Ъ"=>"","Ы"=>"Y","Ь"=>"","Э"=>"JE","Ю"=>"YU",
"Я"=>"YA","а"=>"a","б"=>"b","в"=>"v","г"=>"g","д"=>"d","е"=>"e","ё"=>"ye",
"ж"=>"zh","з"=>"z","и"=>"i","й"=>"yi","к"=>"k","л"=>"l","м"=>"m","н"=>"n",
"о"=>"o","п"=>"p","р"=>"r","с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
"ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"","ы"=>"y","ь"=>"","э"=>"je",
"ю"=>"yu","я"=>"ya"
);
$wm_descpay1 = strtr($wm_descpay, $gost5);
$mmdescription1 = strtr($mmdescription, $gost5);
$mmmessage1 = strtr($mmmessage, $gost5);
$egoldinfo1 = strtr($egoldinfo, $gost5);
$pretext6 = strtr($pretext5, $gost5);
} else {
$gost5 = "";
$wm_descpay1 = $wm_descpay;
$mmdescription1 = $mmdescription;
$mmmessage1 = $mmmessage;
$egoldinfo1 = $egoldinfo;
$pretext6 = $pretext5;
};
// RBK Money
$use_rupay = $params->get('use_rupay', 0);
$rupay_submit = $params->get('rupay_submit','0000000');
$rur = $params->get('RUR','RU000000000');
$rupay_summ = $params->get('rupay_summ', '10');
if ($params->get('off_znahsum')==1) {
$document = JFactory::getDocument();
$buffer=$document->getBuffer(component);
$pattern = '|<span class="chislo">(.*)</span>|isU';
preg_match($pattern, $buffer, $matches);
$all_summrupay = $matches[1];
} else {
$all_summrupay = $rupay_summ;
};
$rupay_url_adds = "https://rbkmoney.ru/acceptpurchase.aspx";
$rupay_successurl = $params->get('rupay_successurl', JURI::base( true ));
// Yandex
$use_yandex = $params->get('use_yandex', 0);
$yandex = $params->get('yandex','00000000000000');
$yandex_summ = $params->get('yandex_summ','10');
$yandex_summ_mm = $yandex_summ + ($yandex_summ/100 * 0.5);
$yandex_summ_mm_mm = number_format($yandex_summ_mm, 2);
$max_summallinyandex = $params->get('max_summallinyandex','100');
if ($params->get('off_znahsum')==1) {
$document = JFactory::getDocument();
$buffer=$document->getBuffer(component);
$pattern = '|<span class="chislo">(.*)</span>|isU';
preg_match($pattern, $buffer, $matches);
$all_summyandex = $matches[1];
} else {
$all_summyandex = $yandex_summ_mm_mm;
};
$yandex_url_adds = "https://money.yandex.ru/charity.xml";
$yandex_successurl = $params->get('yandex_successurl', JURI::base( true ));
// PayPal
$use_paypal = $params->get('use_paypal', 0);
$donate_email = $params->get('paypal_email','alex1962@donpac.ru');
$paypalcur_on = $params->get('paypalcur_on');
$paypalcur_val = $params->get('paypalcur_val');
$paypalval_on = $params->get('paypalval_on');
$paypalval_val = $params->get('paypalval_val');
$paypalvalleast_val = $params->get('paypalvalleast_val');
if ($params->get('off_znahsum')==1) {
$document = JFactory::getDocument();
$buffer=$document->getBuffer(component);
$pattern = '|<span class="chislo">(.*)</span>|isU';
preg_match($pattern, $buffer, $matches);
$all_summpaypal = $matches[1];
} else {
$all_summpaypal = $paypalval_val;
};
$donate_len = $params->get('donate_len','0');
$paypallen_val = $params->get('paypallen_val');
$link_cancel = $params->get('link_cancel',JURI::base( true ));
$link_return = $params->get('link_return',JURI::base( true ));
// MoneyBookers
$use_moneybookers = $params->get('use_moneybookers', 0);
$choose_cur1	= $params->def( 'choose_cur1', 0 );
$currency_moneybookers = $params->def( 'currency_moneybookers', 'USD' );
$moneybookers_email = $params->get('moneybookers_email','andrew.opeyda@gmail.com');
$moneybookers_summ = $params->get('moneybookers_summ', '10');
if ($params->get('off_znahsum')==1) {
$document = JFactory::getDocument();
$buffer=$document->getBuffer(component);
$pattern = '|<span class="chislo">(.*)</span>|isU';
preg_match($pattern, $buffer, $matches);
$all_summmoneybookers = $matches[1];
} else {
$all_summmoneybookers = $moneybookers_summ;
};
$moneybookers_url_adds = "https://www.moneybookers.com/app/payment.pl";
$moneybookers_successurl = $params->get('moneybookers_successurl', JURI::base( true ));
$country1	= $params->def( 'country1', 'US' );
$curr1 = array();
$curr1[] = array('code'=>'USD', 'title'=>'USD' );
$curr1[] = array('code'=>'AUD', 'title'=>'AUD' );
$curr1[] = array('code'=>'GBP', 'title'=>'GBP' );
$curr1[] = array('code'=>'CAD', 'title'=>'CAD' );
$curr1[] = array('code'=>'CZK', 'title'=>'CZK' );
$curr1[] = array('code'=>'DKK', 'title'=>'DKK' );
$curr1[] = array('code'=>'EUR', 'title'=>'EUR' );
$curr1[] = array('code'=>'HKD', 'title'=>'HKD' );
$curr1[] = array('code'=>'HUF', 'title'=>'HUF' );
$curr1[] = array('code'=>'ILS', 'title'=>'ILS' );
$curr1[] = array('code'=>'JPY', 'title'=>'JPY' );
$curr1[] = array('code'=>'MXN', 'title'=>'MXN' );
$curr1[] = array('code'=>'NZD', 'title'=>'NZD' );
$curr1[] = array('code'=>'NOK', 'title'=>'NOK' );
$curr1[] = array('code'=>'PLN', 'title'=>'PLN' );
$curr1[] = array('code'=>'SGD', 'title'=>'SGD' );
$curr1[] = array('code'=>'SEK', 'title'=>'SEK' );
$curr1[] = array('code'=>'CHF', 'title'=>'CHF' );
// Robox
$use_robox = $params->get('use_robox', 0);
$mrh_login = $params->get('mrh_login','demo');
$mrh_pass1 = $params->get('mrh_pass1','Morbid11');
$inv_id = $params->get('inv_id', $random_chars1);
$robox_url_adds = "https://merchant.roboxchange.com/Index.aspx";
$out_summ = $params->get('out_summ','10');
if ($params->get('off_znahsum')==1) {
$document = JFactory::getDocument();
$buffer=$document->getBuffer(component);
$pattern = '|<span class="chislo">(.*)</span>|isU';
preg_match($pattern, $buffer, $matches);
$all_summout = $matches[1];
} else {
$all_summout = $out_summ;
};
$shp_item = "2";
$in_curr = "AlfaBankR";
$culture = $params->get('culture', 'ru');
$crc = md5("$mrh_login:$all_summout:$inv_id:$mrh_pass1:Shp_item=$shp_item");
// liqpay
$use_liqpay = $params->get('use_liqpay', 0);
$merchant_id = $params->get('merchant_id','i0000000000');
$phone = $params->get('phone','+00000000000');
$liqpay_url_adds = "https://www.liqpay.com/?do=clickNbuy";
$signature = $params->get('signature','XFXBKtVRGNKlyappjJUylZGjHFwDQ2zBCK2VH3J');
$liqpay_summ = $params->get('liqpay_summ', '10');
if ($params->get('off_znahsum')==1) {
$document = JFactory::getDocument();
$buffer=$document->getBuffer(component);
$pattern = '|<span class="chislo">(.*)</span>|isU';
preg_match($pattern, $buffer, $matches);
$all_summliqpay = $matches[1];
} else {
$all_summliqpay = $liqpay_summ;
};
$liqpay_currency = $params->get('liqpay_currency', '0');
$gost3 = array( '0' => 'UAH', '1' => 'EUR', '2' => 'USD', '3' => 'RUR' );
$liq1_currency = strtr($liqpay_currency, $gost3);
$gost4 = array( '0' => '&#8372;', '1' => '&euro;', '2' => '$', '3' => '&#8381;' );
$liq1_currenc1 = strtr($liqpay_currency, $gost4);
$method='card,liqpay,delayed';
$result_url = $params->get('result_url', JURI::base( true ));
$server_url = $params->get('server_url', JURI::base( true ));
if ($params->get('switch_fixed')==1) {
$str = "<request>";
$str .= "<version>1.2</version>";
$str .= "<result_url>$result_url</result_url>";
$str .= "<server_url>$server_url</server_url>";
$str .= "<merchant_id>$merchant_id</merchant_id>";
$str .= "<order_id>$random_chars1</order_id>";
$str .= "<amount>$all_summliqpay</amount>";
$str .= "<currency>$liq1_currency</currency>";
$str .= "<description>$wm_descpay1</description>";
$str .= "<default_phone>$phone</default_phone>";
$str .= "<pay_way>$method</pay_way>";
$str .= "</request>";
$operation_xml = base64_encode($str);
$signature = base64_encode(sha1($signature.$str.$signature, 1));
$switch_fixed = '<div class="cont1" style="text-align: center;">';
$switch_fixed .= '<span class="letter">'.JText::_('MOD_AMONEY_FIXED_AMOUNT').'</span>';
$switch_fixed .= '</div>';
$switch_fixed .= '<div class="focus-example cont1" style="text-align: center;">
<div class="input-append"><input id="liqpay-pay-1" class="liqpay-pay-1" type="number" size="3" min="10" max="'.$max_summallin.'" step="'.$step_summallin.'" value="'.$all_summliqpay.'" title="'.JText::_('MOD_AMONEY_ENTER_AMOUNT').'" readonly="readonly" /><span class="add-on">'.$liq1_currency.'&nbsp;-&nbsp;'.$liq1_currenc1.'</span></div>
<input type="hidden" name="operation_xml" value="'.$operation_xml.'"/>
<input type="hidden" name="signature" value="'.$signature.'"/>
</div>';
} else {
$switch_fixed = '<div class="cont1" style="text-align: center;">';
$switch_fixed .= '<span class="letter">'.JText::_('MOD_AMONEY_AMONEY_CURRENCY_SUM').'</span>';
$switch_fixed .= '</div>';
$switch_fixed .= '<div class="cont1" style="text-align: center;">';
$switch_fixed .= '<input type="hidden" name="version" value="1.2"/>';
$switch_fixed .= '<input type="hidden" name="merchant_id" value="'.$merchant_id.'"/>';
$switch_fixed .= '<span class="focus-example1"><input id="liqpay-pay-1" class="liqpay-pay-1" type="number" size="3" name="amount" min="10" max="'.$max_summallin.'" step="'.$step_summallin.'" value="'.$all_summliqpay.'" title="'.JText::_('MOD_AMONEY_ENTER_AMOUNT').'" '.$amofixed.' /></span>&nbsp;';
$switch_fixed .= '<span class="focus-example">';
$switch_fixed .= '<select id="liqpay-pay-2" class="liqpay-pay-2" name="currency" title="'.JText::_('MOD_AMONEY_CHOOSE_A_CURRENCY').'" style="min-width:30px;">';
$switch_fixed .= '<optgroup label="'.JText::_('MOD_AMONEY_AMONEY_CHOICE').'">';
$switch_fixed .= '<option value="USD">USD</option>';
$switch_fixed .= '<option value="EUR">EUR</option>';
$switch_fixed .= '<option value="UAH">UAH</option>';
$switch_fixed .= '<option value="RUR">RUR</option>';
$switch_fixed .= '</optgroup>';
$switch_fixed .= '</select></span>';
$switch_fixed .= '<input type="hidden" name="description" value="'.$wm_descpay1.'"/>';
$switch_fixed .= '<input type="hidden" name="order_id" value="$random_chars1"/>';
$switch_fixed .= '<input type="hidden" name="operation_xml" value="'.$xml_encoded.'"/>';
$switch_fixed .= '<input type="hidden" name="signature" value="'.$lqsignature.'"/>';
$switch_fixed .= '</div>';
$xml = "<request>";
$xml .= "<version>1.2</version>";
$xml .= "<result_url>$result_url</result_url>";
$xml .= "<server_url>$server_url</server_url>";
$xml .= "<merchant_id>$merchant_id</merchant_id>";
$xml .= "<order_id>$random_chars1</order_id>";
$xml .= "<amount>$all_summliqpay</amount>";
$xml .= "<currency>$liq1_currency</currency>";
$xml .= "<description>$wm_descpay1</description>";
$xml .= "<default_phone>$phone</default_phone>";
$xml .= "<pay_way>$method</pay_way>";
$xml .= "</request>";
$xml_encoded = base64_encode($xml);
$lqsignature = base64_encode(sha1($signature.$xml.$signature, 1));
};
// SMScoin
$use_smscoin = $params->get('use_smscoin', 0);
$smscoin_id = $params->get('smscoin_id','000000');
$don_but = JURI::base( true ).'modules/mod_amoney/images/4.png';
$smscoin_lan = $params->get('smscoin_lan','russian');
// CberBank
$use_cbank = $params->get('use_cbank', 0);
$cbank_nemes = $params->get('cbank_nemes','');
$cbank_kpp = $params->get('cbank_kpp','775003035');
$cbank_inn = $params->get('cbank_inn','7707083893');
$cbank_kodokato = $params->get('cbank_kodokato','11111111111');
$cbank_raschchot = $params->get('cbank_raschchot','30301810500001000001');
$cbank_banks1 = $params->get('cbank_banks1','');
$cbank_bik = $params->get('cbank_bik','044525225');
$cbank_korsche = $params->get('cbank_korsche','30101081004000000225');
$cbank_kbk = $params->get('cbank_kbk','111111111111111111111');
$cbank_blago = $params->get('cbank_blago','&#1054;&#1082;&#1072;&#1079;&#1072;&#1085;&#1080;&#1077; &#1091;&#1089;&#1083;&#1091;&#1075;.');
$cbank_rub = $params->get('cbank_rub','0 &#1088;&#1091;&#1073;. 00 &#1082;&#1086;&#1087;.');
//////////////////////////////////////////////////////////////////////////////
if ($wmr != '') {
$wmtype1 = 'WMR';
$wmnum1 = $wmr;
}
if ($wmz != '') {
$wmtype2 = 'WMZ';
$wmnum2 = $wmz;
}
if ($wme != '') {
$wmtype3 = 'WME';
$wmnum3 = $wme;
}
if ($wmu != '') {
$wmtype4 = 'WMU';
$wmnum4 = $wmu;
}
if ($wmb != '') {
$wmtype5 = 'WMB';
$wmnum5 = $wmb;
}
//////////////////////////////////////////////////////////////////////////////////
	$ammhamoney = array();
		if ($use_wm)
		{
			$ammhamoney[] = array(
				"ID" => 'ammh1',
				"title" => 'MOD_AMONEY_WEBMONEY',
				"foo" => 'show_wm',
			);
		}
		if ($use_rupay)
		{
			$ammhamoney[] = array(
				"ID" => 'ammh2',
				"title" => 'MOD_AMONEY_RBKMONEY',
				"foo" => 'show_rupay',
			);
		}
		if ($use_yandex)
		{
			$ammhamoney[] = array(
				"ID" => 'ammh3',
				"title" => 'MOD_AMONEY_YANDEX',
				"foo" => 'show_yandex',
			);
		}
		if ($use_paypal)
		{
			$ammhamoney[] = array(
				"ID" => 'ammh5',
				"title" => 'MOD_AMONEY_PAYPAL',
				"foo" => 'show_paypal',
			);
		}
		if ($use_moneybookers)
		{
			$ammhamoney[] = array(
				"ID" => 'ammh7',
				"title" => 'MOD_AMONEY_MONBOOK',
				"foo" => 'show_moneybookers',
			);
		}
		if ($use_robox)
		{
			$ammhamoney[] = array(
				"ID" => 'ammh8',
				"title" => 'MOD_AMONEY_ROBOKASSA',
				"foo" => 'show_robox',
			);
		}
		if ($use_liqpay)
		{
			$ammhamoney[] = array(
				"ID" => 'ammh12',
				"title" => 'MOD_AMONEY_LIQPAY',
				"foo" => 'show_liqpay',
			);
		}
		if ($use_smscoin)
		{
			$ammhamoney[] = array(
				"ID" => 'ammh13',
				"title" => 'MOD_AMONEY_SMSCOIN',
				"foo" => 'show_smscoin',
			);
		}
		if ($use_cbank)
		{
			$ammhamoney[] = array(
				"ID" => 'ammh14',
				"title" => 'MOD_AMONEY_CBERBANK',
				"foo" => 'show_cbank',
			);
		}
// Output content with template
echo $mod_copyrights_start;
require JModuleHelper::getLayoutPath($mod_name,$params->get('layout', 'default'));
echo $mod_copyrights_end;
?>
