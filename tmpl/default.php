<?php
/**
 * @package     AMoney
 * @subpackage  mod_amoney
 * @version     3.0
 * @author      Adeptus, adeptus@adeptsite.info
 * @copyright   Copyright (C) 2008 Adeptus. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

?>
<script type="text/javascript">
/* <![CDATA[ */
(function($) {
	<?php 
	if ($use_wm)
	{?>
	this.show_wm = function()
	{
		$('<?php echo $payments['wm']; ?>').hide();
		$('#wm').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}
	if ($use_rupay)
	{?>
	this.show_rupay = function()
	{
		$('<?php echo $payments['rupay']; ?>').hide();
		$('#rupay').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}
	if ($use_yandex)
	{?>
	this.show_yandex = function()
	{
		$('<?php echo $payments['yandex']; ?>').hide();
		$('#yandex').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}
	if ($use_paypal)
	{?>
	this.show_paypal = function()
	{
		$('<?php echo $payments['paypal']; ?>').hide();
		$('#paypal').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}
	if ($use_moneybookers)
	{?>
	this.show_moneybookers = function()
	{
		$('<?php echo $payments['moneybookers']; ?>').hide();
		$('#moneybookers').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}
	if ($use_robox)
	{?>
	this.show_robox = function()
	{
		$('<?php echo $payments['robox']; ?>').hide();
		$('#robox').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}
	if ($use_liqpay)
	{?>
	this.show_liqpay = function()
	{
		$('<?php echo $payments['liqpay']; ?>').hide();
		$('#liqpay').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}
	if ($use_smscoin)
	{?>
	this.show_smscoin = function()
	{
		$('<?php echo $payments['smscoin']; ?>').hide();
		$('#smscoin').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}
	if ($use_cbank)
	{?>
	this.show_cbank = function()
	{
		$('<?php echo $payments['cbank']; ?>').hide();
		$('#cbank').<?php echo $jfadtogquery;?>;
		return false;
	};
	<?php
	}?>
	this.hide_all = function()
	{
		$('<?php echo $payments['hideall']; ?>').hide();
		return false;
	}    
})(jQuery);	
<?php 
	if ($jammfadtogquery1 == 1)
		{?>
jQuery(function($) {
    $('#amoney').on('click', '.south', function(){
    	$('#amoney .south').removeClass('active'); 
    	$(this).addClass('active');
    });
});
<?php 
}?>
/* ]]> */
</script>

<!-- Panel -->
<div id="amoney" class="amoney-module<?php echo $params->get('moduleclass_sfx'); ?>" style="text-align: center;">
	<?php
	if ($pretext != '')
	{?>
<div id="amoney1" class="amoney-mod1" style="text-align: center;">
		<span class="panel1"><a class="south" style="margin:3px;text-decoration: none;" onclick="hide_all()" title="<?php echo JText::_('MOD_AMONEY_HIDEALL'); ?>"><?php echo $pretext;?></a></span>
	</div>
<div id="amoney2" class="amoney-payment" style="text-align: center;">
	<!-- Link Edit  -->
	<?php
	}
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
	foreach ($ammhamoney as $item) {
?>
     <a id="<?= $item['ID'] ?>" style="margin:3px;" class="south" title="<?php echo JText::_($item['title']); ?>" onclick="<?= $item['foo'] ?>()"></a>
<?php
}?>
	<!-- Link Edit -->
</div>
</div>
	<?php
	if ($use_wm)
	{?>
<!-- Webmoney -->
<div id="wm" class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>;text-align: center;">
	<form id="wm-pay" name="pay" method="post" action="<?php echo $wm_url_adds; ?>" target="_blank">
				<div class="cont1" style="text-align: center;">
					<div id="ammh15" class="ctynh15" style="text-align: center;"></div>
				</div>
					<?php echo $off_intrerst; ?>
				<div class="cont1" style="text-align: center;">
<script type="text/javascript">
  function donateChangeCurrency1( )
  {
    var selectionObj = document.getElementById( 'wm-pay-2' );
    var selection = selectionObj.value;
    var currencyObj = document.getElementById( 'donate_wm' );
    if( currencyObj )
    {
      var currencySymbols1 = { '<?php echo $wmnum1; ?>': 'P','<?php echo $wmnum2; ?>': '$', '<?php echo $wmnum3; ?>': '&euro;', '<?php echo $wmnum4; ?>': '&#8372;', '<?php echo $wmnum5; ?>': 'Br' };
      var currencySymbol = currencySymbols1[ selection ];
      currencyObj.innerHTML = currencySymbol;
    }
  }
  </script>
  <?php
$currencies1 = array( 'WMR' => 'P', 'WMZ' => '$', 'WME' => '&euro;', 'WMU' => '&#8372;', 'WMB' => 'Br' );
$symbol1 = $currencies1[ $wm_cur_val ];
  ?>
					<span class="letter"><?php echo JText::_('MOD_AMONEY_AMONEY_CURRENCY_SUM'); ?></span>
				</div>
				<div class="cont1" style="text-align: center;">
<div class="input-prepend"><span class="focus-example1">
<span id="donate_wm" class="add-on"><?php echo $symbol1; ?></span>
					<input id="wm-pay-1" class="wm-pay-1" type="number" name="LMI_PAYMENT_AMOUNT" size="3" min="<?php echo $min_summallin;?>" max="<?php echo $max_summallin;?>" step="<?php echo $step_summallin;?>" value="<?php echo $all_summwm;?>" title="<?php echo JText::_('MOD_AMONEY_ENTER_AMOUNT'); ?>" <?php echo $amofixed;?> />
</span></div>
<?php
if ($use_p1) {
  $areas["$wmnum1"] = $wmtype1; 
  }
if ($use_p2) {
  $areas["$wmnum2"] = $wmtype2; 
  }
if ($use_p3) {
  $areas["$wmnum3"] = $wmtype3; 
  }
if ($use_p4) {
  $areas["$wmnum4"] = $wmtype4;
  }
if ($use_p5) {
  $areas["$wmnum5"] = $wmtype5;
}

print( "<span class=\"focus-example\"><select id=\"wm-pay-2\" class=\"wm-pay-2\" name=\"LMI_PAYEE_PURSE\" title=\"".JText::_('MOD_AMONEY_CHOOSE_A_CURRENCY')."\" style=\"min-width:30px;\" onchange=\"donateChangeCurrency1();\">
<optgroup label=\"". JText::_('MOD_AMONEY_AMONEY_CHOICE')."\">" );
foreach( $areas as $currency1 => $dummy1 )
  {
    $selected1 = ( $dummy1 == $wm_cur_val ) ? " selected=\"selected\"" : "";
print( "<option value=\"$currency1\"$selected1>$dummy1</option>\n" );
  }
print( "</optgroup></select></span>\n" );
  ?>

					<input type="hidden" name="LMI_PAYMENT_DESC" value="<?php echo $wm_descpay1;?>" />
					<input type="hidden" name="LMI_PAYMENT_NO" value="<?php echo $random_chars1; ?>" />
					<input type="hidden" name="LMI_SIM_MODE" value="0" />
					<input type="hidden" name="LMI_SUCCESS_URL" value="<?php echo $wm_successurl;?>" />
					<input type="hidden" name="LMI_SUCCESS_METHOD" value="2" />
					<input type="hidden" name="LMI_FAIL_URL" value="<?php echo $wm_errorurl;?>" />
					<input type="hidden" name="LMI_FAIL_METHOD" value="2" />
				</div>
				<div class="cont2" style="text-align: center;">
					<input id="wm-pay-button" class="<?php echo $am_button; ?>" type="submit" name="wmsubmit" value="<?php echo $btntxt; ?>" />
				</div>
	</form>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php
	}
	if ($use_rupay)
	{?>
<!-- RBKmoney -->
<div id="rupay"  class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>;text-align: center;">
	<form id="rupay-pay" name="rupay_rupay" method="post" action="<?php echo $rupay_url_adds; ?>" target="_blank">
				<div class="cont1" style="text-align: center;">
					<div id="ammh16" class="ctynh15" style="text-align: center;"></div>
				</div>
					<?php echo $off_intrerst; ?>
				<div class="cont1" style="text-align: center;">
					<span class="letter"><?php echo JText::_('MOD_AMONEY_ENTER_AMOUNT1'); ?></span>
				</div>
				<div class="focus-example cont1" style="text-align: center;">
				<div class="input-append">
						<input id="rupay-pay-1" class="rupay-pay-1" type="number" name="recipientAmount" size="3" min="<?php echo $min_summallin;?>" max="<?php echo $max_summallin;?>" step="<?php echo $step_summallin;?>" value="<?php echo $all_summrupay;?>" title="<?php echo JText::_('MOD_AMONEY_ENTER_AMOUNT'); ?>" <?php echo $amofixed;?> /><span class="add-on"><?php echo JText::_('MOD_AMONEY_AMONEY_RBL'); ?></span>
						</div>
						<input type="hidden" name="eshopId" value="<?php echo $rupay_submit;?>" />
						<input type="hidden" name="orderId" value="<?php echo $random_chars1; ?>" />
						<input type="hidden" name="serviceName" value="<?php echo $random_chars1; ?>" />
						<input type="hidden" name="recipientCurrency" value="RUR" />
						<input type="hidden" name="serviceName" value="<?php echo $wm_descpay1;?>" />
						<input type="hidden" name="eshopAccount" value="<?php echo $rur;?>" />
						<input type="hidden" name="successUrl" value="<?php echo $rupay_successurl;?>" />
				</div>
				<div class="cont2" style="text-align: center;">
					<input id="rupay-pay-button" class="<?php echo $am_button; ?>" type="submit" name="rupaysubmit" value="<?php echo $btntxt;?>" />
				</div>
	</form>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php
	}
	if ($use_yandex)
	{?>
<!-- Yandex -->
<div id="yandex" class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>;text-align: center;">
	<form id="yandex-pay" name="yandex_pay" method="post" action="<?php echo $yandex_url_adds; ?>" target="_blank">
				<div class="cont1" style="text-align: center;">
					<div id="ammh17" class="ctynh15" style="text-align: center;"></div>
				</div>
					<?php echo $off_intrerst; ?>
				<div class="cont1" style="text-align: center;">
					<span class="letter"><?php echo JText::_('MOD_AMONEY_ENTER_AMOUNT1');?></span>
				</div>
				<div class="focus-example cont1" style="text-align: center;">
				<div class="input-append">
					<input id="yandex-pay-1" class="yandex-pay-1" type="number" name="CompanySum" size="20" min="<?php echo $min_summallin;?>" max="<?php echo $max_summallin;?>" step="<?php echo $step_summallin;?>" value="<?php echo $all_summyandex;?>" title="<?php echo JText::_('MOD_AMONEY_ENTER_AMOUNT'); ?>" <?php echo $amofixed;?> /><span class="add-on"><?php echo JText::_('MOD_AMONEY_AMONEY_RBL');?></span></div>
					<input type="hidden" name="to" value="<?php echo $yandex;?>" />
					<input type="hidden" name="CompanyName" value="<?php echo $wm_descpay1;?>" />
					<input type="hidden" name="CompanyLink" value="<?php echo $yandex_successurl;?>" />
				</div>
				<div class="cont1" style="text-align: center;">
					<span class="letter"><?php echo JText::_('MOD_AMONEY_AMONEY_ACCOUBT');?></span>&nbsp;<span class="letter2"><?php echo $yandex;?></span>
				</div>
				<div class="cont2" style="text-align: center;">
					<input id="yandex-pay-button" class="<?php echo $am_button; ?>" type="submit" name="yandexsubmit" value="<?php echo $btntxt;?>" />
				</div>
	</form>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php
	}
	if ($use_paypal)
	{?>
<!-- PayPal -->
<div id="paypal" class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>;text-align: center;">
<?php
$length = isset( $_POST[ 'paypallength' ] ) ? (int) $_POST[ 'paypallength' ] : "";
$amount = isset( $_POST[ 'paypalamount' ] ) ? trim( $_POST[ 'paypalamount' ] ) : "";
$amount = str_replace( ',', '.', $amount );
if( 1 <= $length && $length <= 3 )
{
  $amount = (int) round( $amount, 0 );
}
if( $amount < $paypalvalleast_val )
{
  $amount = $paypalvalleast_val;
}
$currency_code = isset( $_POST[ 'paypalcurrency_code' ] ) ? trim( $_POST[ 'paypalcurrency_code' ] ) : 0;
if ($length == 4) {
  header("Location: https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=".$donate_email."&item_name=".$wm_descpay1."&item_number=".$random_chars1."&amount=".$amount."&no_shipping=0&no_note=1&tax=0&currency_code=".$currency_code."&bn=PP%2dDonationsBF&charset=UTF%2d8&return=".$link_return."&cancel=".$link_cancel);
}
else if ($length == 1) {
  header("Location: https://www.paypal.com/cgi-bin/webscr?cmd=_xclick-subscriptions&business=".$donate_email."&item_name=".$wm_descpay1."&item_number=".$random_chars1."&no_shipping=1&no_note=1&currency_code=".$currency_code."&bn=PP%2dSubscriptionsBF&charset=UTF%2d8&a3=".$amount."%2e00&p3=1&t3=W&src=1&sra=1&return=".$link_return."&cancel=".$link_cancel);
}
else if ($length == 2) {
  header("Location: https://www.paypal.com/cgi-bin/webscr?cmd=_xclick-subscriptions&business=".$donate_email."&item_name=".$wm_descpay1."&item_number=".$random_chars1."&no_shipping=1&no_note=1&currency_code=".$currency_code."&bn=PP%2dSubscriptionsBF&charset=UTF%2d8&a3=".$amount."%2e00&p3=1&t3=M&src=1&sra=1&return=".$link_return."&cancel=".$link_cancel);
}
else if ($length == 3) {
  header("Location: https://www.paypal.com/cgi-bin/webscr?cmd=_xclick-subscriptions&business=".$donate_email."&item_name=".$wm_descpay1."&item_number=".$random_chars1."&no_shipping=1&no_note=1&currency_code=".$currency_code."&bn=PP%2dSubscriptionsBF&charset=UTF%2d8&a3=".$amount."%2e00&p3=1&t3=Y&src=1&sra=1&return=".$link_return."&cancel=".$link_cancel);
}
$currencies = array( 'RUB' => 'P', 'CAD' => '$', 'USD' => '$', 'GBP' => '&pound;', 'AUD' => '$', 'JPY' => '&yen;', 'EUR' => '&euro;' );
echo "<div class=\"cont1\" style=\"text-align: center;\">";
echo "<div id=\"ammh19\" class=\"ctynh15\" style=\"text-align:center;\"></div>";
echo "</div>";
echo "$off_intrerst";
echo "<form id=\"paypal-pay\" action=\"".$_SERVER['REQUEST_URI']."\" method=\"post\" target=\"_blank\"><div class=\"cont1\" style=\"text-align: center;\">";
if ($paypalval_on == 1) {
  $javaScript = <<< JAVASCRIPT
<script type="text/javascript">
  function donateChangeCurrency( )
  {
    var selectionObj = document.getElementById( 'paypal-pay-3' );
    var selection = selectionObj.value;
    var currencyObj = document.getElementById( 'donate_symbol_currency' );
    if( currencyObj )
    {
      var currencySymbols = { 'RUB': 'P','CAD': '$', 'USD': '$', 'GBP': '&pound;', 'AUD': '$', 'JPY': '&yen;', 'EUR': '&euro;' };
      var currencySymbol = currencySymbols[ selection ];
      currencyObj.innerHTML = currencySymbol;
    }
  }
</script>
JAVASCRIPT;
  $symbol = $currencies[ $paypalcur_val ];
  echo "$javaScript <div class=\"cont1\" style=\"text-align: center;\"><label class=\"letter\">". JText::_('MOD_AMONEY_AMONEY_CURRENCY_SUM')."</label>
</div>
<div class=\"input-prepend\"><span class=\"focus-example1\">
<span id=\"donate_symbol_currency\" class=\"add-on\">".$symbol."</span>
<input id=\"paypal-pay-1\" class=\"paypal-pay-1\" type=\"number\" min=\"".$min_summallin."\" max=\"".$max_summallin."\" step=\"".$step_summallin."\" value=\"".$all_summpaypal."\" name=\"paypalamount\" size=\"3\" title=\"".JText::_('MOD_AMONEY_ENTER_AMOUNT')."\" $amofixed /></span></div>&nbsp;";
}
elseif ($paypalval_on == 0) {
  echo "<input type=\"hidden\" value=\"".$all_summpaypal."\" name=\"paypalamount\" />";
}
if ($paypalcur_on == 1) {
  print( "<span class=\"focus-example\"><select id=\"paypal-pay-3\" class=\"paypal-pay-3\" name=\"paypalcurrency_code\" title=\"".JText::_('MOD_AMONEY_CHOOSE_A_CURRENCY')."\" style=\"min-width:30px;\" onchange=\"donateChangeCurrency();\">
<optgroup label=\"". JText::_('MOD_AMONEY_AMONEY_CHOICE')."\">" );
  foreach( $currencies as $currency => $dummy )
  {
    $selected = ( $currency == $paypalcur_val ) ? " selected=\"selected\"" : "";
    print( "<option value=\"$currency\"$selected>$currency</option>\n" );
  }
  print( "</optgroup></select></span>\n" );
}
elseif ($paypalcur_on == 0) {
  echo "<input type=\"hidden\" name=\"paypalcurrency_code\" value=\"".$paypalcur_val."\" />";
}
if ($donate_len == 1) {
  ?>
<span class="focus-example">
  <select id="paypal-pay-2" class="paypal-pay-2" name="paypallength" title="<?php echo JText::_('MOD_AMONEY_CHOOSE_PERIODICITY'); ?>" style="min-width:30px;">
	<optgroup label="<?php echo JText::_('MOD_AMONEY_AMONEY_CHOICE');?>">
    <option value="4"><?php echo JText::_('MOD_AMONEY_ONE_TIME');?></option>
    <option value="1"><?php echo JText::_('MOD_AMONEY_WEEKLY');?></option>
    <option value="2"><?php echo JText::_('MOD_AMONEY_MONTHLY');?></option>
    <option value="3"><?php echo JText::_('MOD_AMONEY_ANNUAL');?></option>
	</optgroup> 
  </select>
</span>
	<?php
	}
	else if ($donate_len == 0) 
	{?>
	<input type="hidden" name="paypallength" value="<?php echo $paypallen_val;?>" />
	<?php
	}?>
</div>
<div class="cont2" style="text-align: center;">
<input id="paypal-pay-button" class="<?php echo $am_button; ?>" type="submit" name="paypalsubmit" value="<?php echo $btntxt;?>" />
</div>
</form>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php 
	}
	if ($use_moneybookers) 
	{?>
<!-- MoneyBookers -->
<div id="moneybookers" class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>;text-align: center;">
	<form id="moneybookers-pay" name="moneybookers" method="post" action="<?php echo $moneybookers_url_adds; ?>" target="_blank">
				<div class="cont1" style="text-align: center;">
					<div id="ammh21" class="ctynh15" style="text-align: center;"></div>
				</div>
					<?php echo $off_intrerst; ?>
				<div class="cont1" style="text-align: center;">
					<span class="letter"><?php echo JText::_('MOD_AMONEY_ENTER_AMOUNT1');?></span>
				</div>
				<div class="cont1" style="text-align: center;">
<?php if ($choose_cur1) { ?>
<span class="focus-example1">
			<input id="moneybookers-pay-1" class="moneybookers-pay-1" type="number" name="amount" size="3" min="<?php echo $min_summallin;?>" max="<?php echo $max_summallin;?>" step="<?php echo $step_summallin;?>" value="<?php echo $all_summmoneybookers;?>" title="<?php echo JText::_('MOD_AMONEY_ENTER_AMOUNT'); ?>" <?php echo $amofixed;?> />
</span>
<span class="focus-example">
			<select id="moneybookers-pay-2" class="moneybookers-pay-2" name="currency" title="<?php echo JText::_('MOD_AMONEY_CHOOSE_A_CURRENCY'); ?>" style="min-width:30px;">
			<optgroup label="<?php echo JText::_('MOD_AMONEY_AMONEY_CHOICE'); ?>">
			<?php foreach ($curr1 as $cur_code1) {
				$selected1 = ($cur_code1['code'] == $currency_moneybookers)?' selected="selected"':'';
				echo '<option value="'.$cur_code1['code'].'"'.$selected.'>'.$cur_code1['title'].'</option>';
			}
			?>
			</optgroup>
			</select></span>
<?php } else echo '<div class="input-prepend"><span class="focus-example"><span class="add-on">'.$currency_moneybookers.'</span>
					<input id="moneybookers-pay-1" class="moneybookers-pay-1" type="number" name="amount" size="3" min="'.$min_summallin.'" max="'.$max_summallin.'" step="'.$step_summallin.'" value="'.$all_summmoneybookers.'" title="'.JText::_('MOD_AMONEY_ENTER_AMOUNT').'" '.$amofixed.' /></div>
</span>
					<input type="hidden" name="currency" value="'.$currency_moneybookers.'"/>'; ?>
					<input type="hidden" name="pay_to_email" value="<?php echo $moneybookers_email;?>" />
					<input type="hidden" name="status_url" value="<?php echo $moneybookers_successurl;?>" />
					<input type="hidden" name="language" value="<?php echo $country1; ?>" />
					<input type="hidden" name="detail1_description" value="<?php echo $pretext6;?>" />
					<input type="hidden" name="detail1_text" value="<?php echo $wm_descpay1;?> &mdash; N<?php echo $random_chars1; ?>" />
				</div>
				<div class="cont2" style="text-align: center;">
					<input id="moneybookers-pay-button" class="<?php echo $am_button; ?>" type="submit" name="moneybookerssubmit" value="<?php echo $btntxt;?>" />
				</div>
</form>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php 
	}
	if ($use_robox)
	{?>
<!-- Robox -->
<div id="robox" class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>;text-align: center;">
	<form id="robox-pay" name="robox" method="post" action="<?php echo $robox_url_adds; ?>" target="_blank">
				<div class="cont1" style="text-align: center;">
					<div id="ammh22" class="ctynh15" style="text-align: center;"></div>
				</div>
					<?php echo $off_intrerst; ?>
				<div class="cont1" style="text-align: center;">
					<span class="letter"><?php echo JText::_('MOD_AMONEY_FIXED_AMOUNT');?></span>
				</div>
				<div class="focus-example cont1" style="text-align: center;">
      <input type="hidden" name="MrchLogin" value="<?php echo $mrh_login;?>" />
	  <div class="input-prepend input-append"><span id="donate_wm" class="add-on">P</span>
      <input id="robox-pay-1" class="robox-pay-1" type="number" name="outsum" size="16" min="<?php echo $min_summallin;?>" max="<?php echo $max_summallin;?>" step="<?php echo $step_summallin;?>" value="<?php echo $all_summout;?>" title="<?php echo JText::_('MOD_AMONEY_A_FIXIXED_AMOUNT'); ?>" readonly="readonly" /><span class="add-on">WMR</span>
	  </div>
      <input type="hidden" name="InvId" value="<?php echo $inv_id;?>"  />
      <input type="hidden" name="Desc" value="<?php echo $wm_descpay1;?>" />
      <input type="hidden" name="SignatureValue" value="<?php echo $crc;?>" />
      <input type="hidden" name="Shp_item" value="<?php echo $shp_item;?>" />
      <input type="hidden" name="IncCurrLabel" value="<?php echo $in_curr;?>" />
      <input type="hidden" name="Culture" value="<?php echo $culture;?>" />
				</div>
				<div class="cont2" style="text-align: center;">
					<input id="robox-pay-button" class="<?php echo $am_button; ?>" type="submit" name="roboxsubmit" value="<?php echo $btntxt;?>" />
				</div>
</form>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php 
	}
	if ($use_liqpay)
	{?>
<!-- liqpay -->
<div id="liqpay" class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>;text-align: center;">
	<form id="liqpay-pay" name="liqpay" method="post" action="<?php echo $liqpay_url_adds; ?>" target="_blank">
				<div class="cont1" style="text-align: center;">
					<div id="ammh26" class="ctynh15" style="text-align: center;"></div>
				</div>
					<?php 
						echo $off_intrerst;
						echo $switch_fixed;
					?>
				<div class="cont2" style="text-align: center;">
					<input id="liqpay-pay-button" class="<?php echo $am_button; ?>" type="submit" name="liqpaysubmit" value="<?php echo $btntxt;?>"/>
				</div>
	</form>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php 
	}
	if ($use_smscoin)
	{?>
<!-- SMScoin -->
<div id="smscoin" class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>;text-align: center;">
				<div class="cont1" style="text-align: center;">
					<div id="ammh27" class="ctynh15" style="text-align: center;"></div>
				</div>
					<?php echo $off_intrerst; ?>
<div id="cont2" class="cont2" style="text-align: center;">
<script type="text/javascript">
/* <![CDATA[ */
smsDonateId = '<?php echo $smscoin_id;?>';
smsDonateButton = '<?php echo $don_but;?>';
smsDonateLanguage = '<?php echo $smscoin_lan;?>';
function smsDonateInit() {
smsDonateButton = window.smsDonateButton || 1;
document.write('<img id="south" width="100" height="40" src="' + smsDonateButton + '" alt="Donate" title="Donate" onclick="smsDonatePopup(\'' + (window.smsDonateLanguage? window.smsDonateLanguage: '') + '\')" style="cursor: pointer" />');
}
function smsDonatePopup(language) {
if (!window.smsDonateId) return;
var lang = (!!language)? '&language=' + language: '';
var ls = (language == "english")? '_en': '';
window.open('http://donate.smscoin.com/js/smsdonate/index' + ls +
'.html?sid=' + smsDonateId + lang,
'smsdonate_popup', 'height=500,left=' + (screen.width - 700 >> 1) +
',resizable=yes,scrollbars=yes,top=' + (screen.height - 500 >> 1) +
',width=700');
}
smsDonateInit();
/* ]]> */
</script>
</div>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php 
	}
	if ($use_cbank)
	{?>
<!-- CberBank -->
<div id="cbank" class="amoney" style="width:<?php echo $width_border; ?>%;height:<?php echo $height_border; ?>;text-align: center;">
				<div class="cont1" style="text-align: center;">
					<div id="ammh28" class="ctynh15" style="text-align: center;"></div>
				</div>
					<?php echo $off_intrerst; ?>
<div id="cont3" class="cont2" style="text-align: center;">

<script type="text/javascript">
/* <![CDATA[ */
function new_window()
{
var win=window.open('','_blank','width=800,height=700')  
win.document.open()  
win.document.write('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">')
win.document.write('<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru">')
win.document.write('<head>')
win.document.write('<meta http-equiv="content-type" content="text/html; charset=utf-8"/>')
win.document.write('<title>&#1057;&#1095;&#1077;&#1090;</title>')
win.document.write('<style type="text/css">')
win.document.write('         div { position: absolute; background: transparent; text-align: left; color: #000000; font-family: Arial; font-size: 9pt; }')
win.document.write('         .center { text-align: center; }')
win.document.write('         .wide { width: 100%; }')
win.document.write('         .bfull { border: 1px #000000 solid; }')
win.document.write('         .smallf { font-size: 6pt; }')
win.document.write('         .field { border: none; border-bottom: 1px #000000 solid; font-style: italic; font-size: 8.5pt; }')
win.document.write('   @media print {')
win.document.write('    div .window {')
win.document.write('     widows: 0;')
win.document.write('     orphans: 0;')
win.document.write('    }')
win.document.write('   }')
win.document.write('</style>')
win.document.write('</head>')
win.document.write('<body>')
win.document.write('<div class="bfull" style="left: 20px; top: 20px; width: 705px; height: 574px;">')
win.document.write('<div class="bfull" style="left: 0px; top: 0px; width: 191px; height: 287px;">')
win.document.write('<div class="wide center" style="top: 13px;">&#1048;&#1079;&#1074;&#1077;&#1097;&#1077;&#1085;&#1080;&#1077; &#8470;<?php echo $random_chars1; ?> </div>')
win.document.write('<div class="wide center" style="top: 206px;">&#1050;&#1072;&#1089;&#1089;&#1080;&#1088;</div>')
win.document.write('</div>')
win.document.write('<div class="bfull" style="left: 191px; top: 0px; width: 514px; height: 287px;">')
win.document.write('<div class="smallf" style="left: 452px; top: 10px;">&#1060;&#1086;&#1088;&#1084;&#1072; &#1051;&#1059;&#1062;-4</div>')
win.document.write('<div class="field" style="top: 24px; left: 7px; width: 500px;">&nbsp;<?php echo $cbank_nemes; ?>,&nbsp;&#1050;&#1055;&#1055;:<?php echo $cbank_kpp; ?>,&nbsp;&#1048;&#1053;&#1053;:<?php echo $cbank_inn; ?>,&nbsp;&#1054;&#1050;&#1040;&#1058;&#1054;:<?php echo $cbank_kodokato; ?></div>')
win.document.write('<div class="smallf center" style="top: 40px; left: 7px; width: 500px;">&#1087;&#1086;&#1083;&#1091;&#1095;&#1072;&#1090;&#1077;&#1083;&#1100; &#1087;&#1083;&#1072;&#1090;&#1077;&#1078;&#1072;</div>')
win.document.write('<div class="field" style="top: 54px; left: 7px; width: 350px;"><span class="field" style="top: 24px; left: 7px; width: 500px;">&nbsp;<?php echo $cbank_banks1; ?></span></div>')
win.document.write('<div class="smallf center" style="top: 70px; left: 7px; width: 350px;">&#1053;&#1072;&#1080;&#1084;&#1077;&#1085;&#1086;&#1074;&#1072;&#1085;&#1080;&#1077; &#1073;&#1072;&#1085;&#1082;&#1072;</div>')
win.document.write('<div class="field" style="top: 54px; left: 364px; width: 143px;">&nbsp;<?php echo $cbank_raschchot; ?></div>')
win.document.write('<div class="smallf center" style="top: 70px; left: 364px; width: 143px;">&#1056;&#1072;&#1089;&#1095;&#1077;&#1090;&#1085;&#1099;&#1081; &#1089;&#1095;&#1077;&#1090;</div>')
win.document.write('<div class="field" style="top: 84px; left: 7px; width: 500px;">&nbsp;&#1050;/&#1089;&nbsp;<?php echo $cbank_korsche; ?>,&nbsp;&#1041;&#1048;&#1050;:<?php echo $cbank_bik; ?>,&nbsp;&#1050;&#1041;&#1050;:<?php echo $cbank_kbk; ?></div>')
win.document.write('<div class="smallf center" style="top: 100px; left: 7px; width: 500px;">&#1076;&#1088;&#1091;&#1075;&#1080;&#1077; &#1073;&#1072;&#1085;&#1082;&#1086;&#1074;&#1089;&#1082;&#1080;&#1077; &#1088;&#1077;&#1082;&#1074;&#1080;&#1079;&#1080;&#1090;&#1099;</div>')
win.document.write('<div class="field" style="top: 114px; left: 7px; width: 500px; height:14px; overflow:hidden;">&nbsp;</div>')
win.document.write('<div class="smallf center" style="top: 130px; left: 7px; width: 500px;">&#1060;&#1048;&#1054; &#1087;&#1083;&#1072;&#1090;&#1077;&#1083;&#1100;&#1073;&#1080;&#1082;&#1072;</div>')
win.document.write('<div class="field" style="top: 144px; left: 7px; width: 500px;">&nbsp;</div>')
win.document.write('<div class="smallf center" style="top: 160px; left: 7px; width: 500px;">Адрес плательщика</div>')
win.document.write('<div class="field" style="top: 174px; left: 7px; width: 500px;"><?php echo $cbank_blago; ?>, &#1041;&#1077;&#1079; &#1053;&#1044;&#1057;</div>')
win.document.write('<div class="smallf center" style="top: 190px; left: 7px; width: 500px;">&#1053;&#1072;&#1079;&#1085;&#1072;&#1095;&#1077;&#1085;&#1080;&#1077; &#1087;&#1083;&#1072;&#1090;&#1077;&#1078;&#1072;</div>')
win.document.write('<div style="top: 204px; left: 7px; width: 76px;">&#1057;&#1091;&#1084;&#1084;&#1072;</div>')
win.document.write('<div class="field" style="top: 204px; left: 90px; width: 190px;"><?php echo $cbank_rub; ?></div>')
win.document.write('<div style="top: 246px; left: 7px; width: 200px;">&#1055;&#1086;&#1076;&#1087;&#1080;&#1089;&#1100; &#1087;&#1083;&#1072;&#1090;&#1077;&#1083;&#1100;&#1097;&#1080;&#1082;&#1072;</div>')
win.document.write('</div>')
win.document.write('<div class="bfull" style="left: 0px; top: 287px; width: 191px; height: 287px;">')
win.document.write('<div class="wide center" style="top: 13px;">&#1048;&#1079;&#1074;&#1077;&#1097;&#1077;&#1085;&#1080;&#1077; &#8470;<?php echo $random_chars1; ?></div>')
win.document.write('<div class="wide center" style="top: 206px;">&#1050;&#1072;&#1089;&#1089;&#1080;&#1088;</div>')
win.document.write('</div>')
win.document.write('<div class="bfull" style="left: 191px; top: 287px; width: 514px; height: 287px;">')
win.document.write('<div class="smallf" style="left: 452px; top: 10px;">&#1060;&#1086;&#1088;&#1084;&#1072; &#1051;&#1059;&#1062;-4</div>')
win.document.write('<div class="field" style="top: 24px; left: 7px; width: 500px;"><span class="field" style="top: 24px; left: 7px; width: 500px;">&nbsp;<?php echo $cbank_nemes; ?>,&nbsp;&#1050;&#1055;&#1055;:<?php echo $cbank_kpp; ?>,&nbsp;&#1048;&#1053;&#1053;:<?php echo $cbank_inn; ?>,&nbsp;&#1054;&#1050;&#1040;&#1058;&#1054;:<?php echo $cbank_kodokato; ?></span></div>')
win.document.write('<div class="smallf center" style="top: 40px; left: 7px; width: 500px;">&#1087;&#1086;&#1083;&#1091;&#1095;&#1072;&#1090;&#1077;&#1083;&#1100; &#1087;&#1083;&#1072;&#1090;&#1077;&#1078;&#1072;</div>')
win.document.write('<div class="field" style="top: 54px; left: 7px; width: 350px;"><span class="field" style="top: 24px; left: 7px; width: 500px;">&nbsp;<?php echo $cbank_banks1; ?></span></div>')
win.document.write('<div class="smallf center" style="top: 70px; left: 7px; width: 350px;">&#1053;&#1072;&#1080;&#1084;&#1077;&#1085;&#1086;&#1074;&#1072;&#1085;&#1080;&#1077; &#1073;&#1072;&#1085;&#1082;&#1072;</div>')
win.document.write('<div class="field" style="top: 54px; left: 364px; width: 143px;">&nbsp;<?php echo $cbank_raschchot; ?></div>')
win.document.write('<div class="smallf center" style="top: 70px; left: 364px; width: 143px;">&#1056;&#1072;&#1089;&#1095;&#1077;&#1090;&#1085;&#1099;&#1081; &#1089;&#1095;&#1077;&#1090;</div>')
win.document.write('<div class="field" style="top: 84px; left: 7px; width: 500px;"><span class="field" style="top: 84px; left: 7px; width: 500px;">&nbsp;&#1050;/&#1089;&nbsp;<?php echo $cbank_korsche; ?>,&nbsp;&#1041;&#1048;&#1050;:<?php echo $cbank_bik; ?>,&nbsp;&#1050;&#1041;&#1050;:<?php echo $cbank_kbk; ?></span></div>')
win.document.write('<div class="smallf center" style="top: 100px; left: 7px; width: 500px;">&#1076;&#1088;&#1091;&#1075;&#1080;&#1077; &#1073;&#1072;&#1085;&#1082;&#1086;&#1074;&#1089;&#1082;&#1080;&#1077; &#1088;&#1077;&#1082;&#1074;&#1080;&#1079;&#1080;&#1090;&#1099;</div>')
win.document.write('<div class="field" style="top: 114px; left: 7px; width: 500px; height:14px; overflow:hidden;">&nbsp;</div>')
win.document.write('<div class="smallf center" style="top: 130px; left: 7px; width: 500px;">&#1060;&#1048;&#1054; &#1087;&#1083;&#1072;&#1090;&#1077;&#1083;&#1100;&#1073;&#1080;&#1082;&#1072;</div>')
win.document.write('<div class="field" style="top: 144px; left: 7px; width: 500px;"><span class="field" style="top: 144px; left: 7px; width: 500px;">&nbsp;</span></div>')
win.document.write('<div class="smallf center" style="top: 160px; left: 7px; width: 500px;">&#1040;&#1076;&#1088;&#1077;&#1089; &#1087;&#1083;&#1072;&#1090;&#1077;&#1083;&#1100;&#1073;&#1080;&#1082;&#1072;</div>')
win.document.write('<div class="field" style="top: 174px; left: 7px; width: 500px;"><span class="field" style="top: 174px; left: 7px; width: 500px;"><?php echo $cbank_blago; ?>, &#1041;&#1077;&#1079; &#1053;&#1044;&#1057;</span></div>')
win.document.write('<div class="smallf center" style="top: 190px; left: 7px; width: 500px;">&#1053;&#1072;&#1079;&#1085;&#1072;&#1095;&#1077;&#1085;&#1080;&#1077; &#1087;&#1083;&#1072;&#1090;&#1077;&#1078;&#1072;</div>')
win.document.write('<div style="top: 204px; left: 7px; width: 76px;">&#1057;&#1091;&#1084;&#1084;&#1072;</div>')
win.document.write('<div class="field" style="top: 204px; left: 90px; width: 190px;"><?php echo $cbank_rub; ?></div>')
win.document.write('<div style="top: 246px; left: 7px; width: 200px;">&#1055;&#1086;&#1076;&#1087;&#1080;&#1089;&#1100; &#1087;&#1083;&#1072;&#1090;&#1077;&#1083;&#1100;&#1097;&#1080;&#1082;&#1072;</div>')
win.document.write('</div>')
win.document.write('</div>')
win.document.write('<div class="window" style="top: 630px;">Print <b>Ctrl+P</b></div>')
win.document.write('</body></html>')
win.document.close()
}
/* ]]> */
</script>

<input id="cbank-pay-button" class="<?php echo $am_button; ?>" type="submit" value="<?php echo JText::_('MOD_AMONEY_SAVINGS_BANK');?>" onclick="new_window()" />

</div>
<div class="poweredby1" style="text-align: center;">
	<?php echo $copy;?>
</div>
</div>
	<?php
	}?>
<?php 
	if ($exterlink == 2)
	{?>
<div id="ampoweredby-external" style="text-align: center;">
<?php echo $copcop;?>
</div>
	<?php
	}?>
