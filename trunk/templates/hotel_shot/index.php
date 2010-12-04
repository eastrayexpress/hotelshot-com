<?php
/**
 * @copyright	Copyright (C) 2005 - 2007 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

include_once (dirname(__FILE__).DS.'/ja_vars.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">

<head>
<script language="javascript" type="text/javascript" src="<?php echo $tmpTools->templateurl(); ?>/js/jquery.min.js"></script>
<script language="javascript">
jQuery.noConflict();
</script>
<jdoc:include type="head" />
<?php JHTML::_('behavior.mootools'); ?>

<link rel="stylesheet" href="<?php echo $tmpTools->baseurl(); ?>templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $tmpTools->baseurl(); ?>templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $tmpTools->templateurl(); ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $tmpTools->templateurl(); ?>/css/additional.css" type="text/css" />


<script language="javascript" type="text/javascript" src="<?php echo $tmpTools->templateurl(); ?>/js/jquery-ui.min.js"></script>

<!--
<script language="javascript" type="text/javascript" src="<?php echo $tmpTools->templateurl(); ?>/js/jquery.ui.datepicker.pack.js"></script>
-->
<script language="javascript" type="text/javascript" src="<?php echo $tmpTools->templateurl(); ?>/js/jquery-ui-1.8.6.custom.min.js"></script>

<script language="javascript" type="text/javascript" src="<?php echo $tmpTools->templateurl(); ?>/js/jquery.ui.datepicker-sk.js.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $tmpTools->templateurl(); ?>/js/additional.js"></script>

<!--[if IE 7.0]>
<style type="text/css">
.clearfix {display: inline-block;}
</style>
<![endif]-->
<?php if ($tmpTools->isIE6()): ?>
<!--[if lte IE 6]>
<script type="text/javascript">
var siteurl = '<?php echo $tmpTools->baseurl();?>';

window.addEvent ('load', makeTransBG);
function makeTransBG() {
	fixIEPNG($E('.ja-headermask'), '', '', 1);
	fixIEPNG($E('h1.logo a'));
	fixIEPNG($$('img'));
	fixIEPNG ($$('#ja-mainnav ul.menu li ul'), '', 'scale', 0, 2);
}
</script>
<style type="text/css">
.ja-headermask, h1.logo a, #ja-cssmenu li ul { background-position: -1000px; }
#ja-cssmenu li ul li, #ja-cssmenu li a { background:transparent url(<?php echo $tmpTools->templateurl(); ?>/images/blank.png) no-repeat right;}
.clearfix {height: 1%;}
</style>
<![endif]-->
<?php endif; ?>
<!--[if lt IE 7]>
<link rel="stylesheet" href="win-iex.css" type="text/css" media="screen, projection" />
<![endif]-->
</head>
<body>
    <div class="container_24">
        <img src="<?php echo $tmpTools->templateurl();?>/logo.png"><p style="float: right">
            <div id="user-menu">
                <ul>
                    <li class="languages"><span>
                        <img title="Slovak" src="<?php echo $tmpTools->templateurl();?>/images/sk.gif" alt="Slovak" /></span><ul>
                            <li><a href="/?fr=lang">
                                <img title="Norsk" src="<?php echo $tmpTools->templateurl();?>/images/cz.gif" alt="Norsk" />
                                Czech</a></li>
                            <li><a href="?fr=lang">
                                <img title="Norsk" src="<?php echo $tmpTools->templateurl();?>/images/us.gif" alt="Norsk" />
                                English</a></li>
                            <li><a href="lang">
                                <img title="Norsk" src="<?php echo $tmpTools->templateurl();?>/images/de.gif" alt="Norsk" />
                                German</a></li>
                            <li><a href="fr=lang">
                                <img title="Norsk" src="<?php echo $tmpTools->templateurl();?>/images/fr.gif" alt="Norsk" />
                                French</a></li>
                        </ul>
                    </li>
                    <li class="currencies"><span>EUR</span><ul>
                        <li><a href="/hotel/ajaxCurrency?currency=EUR">EUR</a></li><li><a href="/hotel/ajaxCurrency?currency=GBP">
                            GBP</a></li><li><a href="/hotel/ajaxCurrency?currency=USD">USD</a></li><li><a href="/hotel/ajaxCurrency?currency=CZK">
                                CZK</a></li></ul>
                    </li>
                    <li><a class="show-login-button" href="/login">Check your booking</a></li>
                </ul>
            </div>
            <!-- #user-menu -->
            <hr>
            <div class="clear">
            </div>
            <!-- BEGIN HOME SEARCH BOX-->
            <?php if($this->countModules("homesearchbox")):?>
            <div class="grid_8 alpha left-container" style="background: #F7F7F7; min-height: 290px;
                border: 5px solid #D4DEF0; padding: 10px; width: 315px; margin-right: 5px">
                
				<jdoc:include type="modules" name="homesearchbox" />
				
                
            </div>     
            <?php endif;?>
            <!-- END HOME SEARCH BOX-->  
            <!-- BEGIN TOP ATTRACTION-->  
            <?php if($this->countModules("topattraction")):?>               
            <div id="mainhotel" class="bg-hotel-feature grid_16 alpha omega " >
				<jdoc:include type="modules" name="topattraction" />
            </div>
            <?php endif;?>
            <!-- END TOP ATTRACTION-->  
            <!--SEPARATE-->
            <?php if($this->countModules("homesearchbox") ||$this->countModules("topattraction") ):?>
            <div class="clear">
            </div>
            <br />
            <?php endif;?>
            
            
            <!-- BEGIN Home Column 1-->  
            <?php if($this->countModules("homecolumn1")):?>    
            <div class="grid_8" id="popular" style="width: 340px">
				<jdoc:include type="modules" name="homecolumn1" />
            </div>            
            <?php endif;?>
                        
            <!-- BEGIN Home Column 2-->  
            <?php if($this->countModules("homecolumn2")):?>    
            <div class="hotel-index-benefits grid_9">
				
				<jdoc:include type="modules" name="homecolumn2" />                           
                
            </div>
            
            <?php endif;?>
            
             <!-- BEGIN Home Column 3-->  
            <?php if($this->countModules("homecolumn3")):?>    
            <div class="grid_6 index-recent" style="">
            
				<jdoc:include type="modules" name="homecolumn3" />               
                
            </div>
            <?php endif;?>
            
            <div class="clear top200">
            </div>
            <hr>
            <div class="grid_5">
                <img src="<?php echo $tmpTools->templateurl();?>/logo.png" width="200px" />
            </div>
            <div class="grid_5">
                <strong>About Us</strong><br>
                FAQ
            </div>
            <div class="grid_5">
                <strong>Contact Us</strong><br>
                Customer Support
            </div>
            <div class="grid_5">
                <strong>Terms & Conditions</strong><br>
                Privacy
            </div>
    </div>
    <style>
        .index
        {
            margin-left: 10px;
            margin-top: 10px;
            width: 230px;
        }
    </style>
</body>
</html>
