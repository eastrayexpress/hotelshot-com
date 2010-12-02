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
            <div class="grid_8 alpha left-container" style="background: #F7F7F7; min-height: 290px;
                border: 5px solid #D4DEF0; padding: 10px; width: 315px; margin-right: 5px">
                <form name="bookingSearchForm" action="http://www.booking.com/searchresults.html"
                id="bookingSearchForm" method="get" target="_blank">
                <div class="hdr">
                    <h2 style="">
                        Search hotels</h2>
                </div>
                <hr>
                <input type="hidden" name="aid" value="325061" />
                <input type="hidden" name="label" value="shot" />
                <input type="hidden" name="ss_all" value="0" />
                <input type="hidden" name="si" value="ai,co,ci,re,di" />
                <input type="hidden" name="ifl" value="1" />
                <div class="gridfirst">
                    <label for="autocomplete">
                        Destination:</label><br />
                    <input class="text" type="search" results="6" autosave="booking.com" placeholder="Mesto, Oblasť, Krajina, Pamiatka, Hotel, Štvrť"
                        name="ss" id="autocomplete" title="Mesto, Oblasť, Krajina, Pamiatka, Hotel, Štvrť" />
                    <div class="clear">
                    </div>
                    <p class="explanatory_index">
                        You can type anything here: a city, an airport code, a country or landmark.
                    </p>
                </div>
                <br />
                <div class="gridnew">
                    <label for="checkin">
                        Check-in:</label><br />
                    <input type="text" id="checkin" name="checkin" class="datepicker" value="dd/mm/yy" />
                    <div class="destination_flyout_button">
                    </div>
                </div>
                <div class="gridnew">
                    <label for="checkout">
                        Check-out:</label><br />
                    <input type="text" id="checkout" name="checkout" class="datepicker" value="dd/mm/yy" />
                    <div class="destination_flyout_button">
                    </div>
                </div>
                <button type="submit" class="button blue index" style="" title="Book your hotel now!">
                    <span>Search ›</span>
                </button>
                </form>
            </div>          
            <div id="mainhotel" class="bg-hotel-feature grid_16 alpha omega " >
                <div style="background: rgba(37,140,216,.7); margin-top: 250px; min-height: 60px">
                    <h2 class="top-destination">
                        Istanbul</h2>
                    </a>
                    <div style="margin-top: -70px; width: 90px; float: right; margin-right: 50px; padding: 10px;
                        font: bold 23px Arial; background: rgba(37,140,216,.7); color: white;">
                        od 32€
                        <img src="<?php echo $tmpTools->templateurl();?>/more-destinations.gif">
                    </div>
                </div>
            </div>
            <div class="clear">
            </div>
            <br />
            <div class="grid_8" id="popular" style="width: 340px">
                <div class="benefit" style="margin-bottom: 10px">
                    <h3>
                        Most popular cities</h3>
                </div>
                <div class="grid_4" style="padding: 5px; padding-left: 0">
                    <img src="http://www.stay.com/images/city/345/61769b85/las-vegas-skyline.jpg" style="width: 150;
                        height: 75px">
                    <h3 class="city-index">
                        Las Vegas</h3>
                    <div class="hotel-count">
                        195 hotels
                    </div>
                    <div class="price-range">
                        from 20 USD</div>
                </div>
                <div class="grid_4" style="padding: 5px">
                    <img src="http://www.stay.com/images/city/357/190fd51f/new-york-featured.jpg" style="width: 150;
                        height: 75px">
                    <h3 class="city-index">
                        New York</h3>
                    <div class="hotel-count">
                        195 hotels
                    </div>
                    <div class="price-range">
                        from 20 USD</div>
                </div>
                <div class="grid_4" style="padding: 5px; padding-left: 0">
                    <img src="http://www.stay.com/images/city/129/5c8d74bd/paris-featured.jpg" style="width: 150;
                        height: 75px">
                    <h3 class="city-index">
                        Paris</h3>
                    <div class="hotel-count">
                        195 hotels
                    </div>
                    <div class="price-range">
                        from 20 USD</div>
                </div>
                <div class="grid_4" style="padding: 5px">
                    <img src="http://www.stay.com/images/city/104/df0f3d10/plaza-mayor-in-the-heart-of-madrid.jpg"
                        style="width: 150; height: 75px">
                    <h3 class="city-index">
                        Madrid</h3>
                    <div class="hotel-count">
                        195 hotels
                    </div>
                    <div class="price-range">
                        from 20 USD</div>
                </div>
            </div>
            <style>
                .benefit ul li
                {
                    color: red;
                }
            </style>
            <div class="hotel-index-benefits grid_9">
                <div class="benefit">
                    <h3>
                        Why book your hotel with hotelshot.com?</h3>
                    <ul class="check">
                        <li>More than <a>150 000 hotels</a></li>
                        <li>Secure booking</li>
                        <li>More than 14€ saved already</li>
                        <li>No cancellation fees</li>
                        <li>Lots of customer reviews</li>
                    </ul>
                </div>
                <div class="benefit">
                    <h3>
                        Recently booked</h3>
                </div>
                <p style="margin-left: 15px">
                    <strong><a href="">The Carlton Hotel</a></strong> v meste Ipswich (GB) 12.32 pm
                </p>
                <p style="margin-left: 15px">
                    <strong><a href="">The Carlton Hotel</a></strong> v meste Ipswich (GB) 12.32 pm
                </p>
                <p style="margin-left: 15px">
                    <strong><a href="">The Carlton Hotel</a></strong> v meste Ipswich (GB) 12.32 pm
                </p>
            </div>
            <div class="grid_6 index-recent" style="">
                <style>
                    .index-img
                    {
                        margin-left: 10px;
                        float: left;
                        position: relative;
                        margin-right: 10px;
                    }
                    .index-recent h4
                    {
                        font-size: 12px;
                    }
                </style>
                <div class="benefit" style="margin-bottom: 10px">
                    <h3>
                        My hotelshot.com</h3>
                </div>
                <h3 class="indexlevel">
                    My bookmarks</h3>
                <div class="deals-inner-cont">
                    <div class="deal-price">
                        <label class="deal-price-link">
                            <img src="http://y.bstatic.com/images/hotel/square60/333/3337306.gif">
                    </div>
                    <div class="deal-details">
                        <label>
                            <a href="" target="_blank">Tropicana Las Vegas Hotel & Resort Casino</a>
                        </label>
                        <p style="margin-top: 20px">
                            <div id="star-cont" style="padding-top: 0px;">
                                <span class="star5"></span>
                            </div>
                        </p>
                        <strong><a class="deal-price-link">132€</a></strong>
                    </div>
                </div>
                <div class="deals-inner-cont">
                    <div class="deal-price">
                        <label class="deal-price-link">
                            <img src="http://z.bstatic.com/images/hotel/square60/275/2755665.gif">
                    </div>
                    <div class="deal-details">
                        <label>
                            <a href="" target="_blank">MGM Grand</a>
                        </label>
                        <p style="margin-top: 20px">
                            <div id="star-cont" style="padding-top: 0px;">
                                <span class="star4"></span>
                            </div>
                        </p>
                        <strong><a class="deal-price-link">78€</a></strong>
                    </div>
                </div>
                <div class="deals-inner-cont">
                    <div class="deal-price">
                        <label class="deal-price-link">
                            <img src="http://y.bstatic.com/images/hotel/square60/287/2876848.gif">
                    </div>
                    <div class="deal-details">
                        <label>
                            <a href="" target="_blank">Mandarin Oriental at CityCenter Las Vegas </a>
                        </label>
                        <p style="margin-top: 20px">
                            <div id="star-cont" style="padding-top: 0px;">
                                <span class="star5"></span>
                            </div>
                        </p>
                        <strong><a class="deal-price-link">190€</a></strong>
                    </div>
                </div>
                <p id="see-all-deals">
                    <a href="/my-hotelshots">See All your favourite hotels</a></p>
                <div class="clear">
                </div>
                <h3 class="indexlevel">
                    Recently viewed hotels</h3>
                <div class="deals-inner-cont">
                    <div class="deal-price">
                        <label class="deal-price-link">
                            <img src="http://y.bstatic.com/images/hotel/square60/333/3337306.gif">
                    </div>
                    <div class="deal-details">
                        <label>
                            <a href="" target="_blank">Tropicana Las Vegas Hotel & Resort Casino</a>
                        </label>
                        <p style="margin-top: 20px">
                            <div id="star-cont" style="padding-top: 0px;">
                                <span class="star5"></span>
                            </div>
                        </p>
                        <strong><a class="deal-price-link">132€</a></strong>
                    </div>
                </div>
                <div class="deals-inner-cont">
                    <div class="deal-price">
                        <label class="deal-price-link">
                            <img src="http://z.bstatic.com/images/hotel/square60/275/2755665.gif">
                    </div>
                    <div class="deal-details">
                        <label>
                            <a href="" target="_blank">MGM Grand</a>
                        </label>
                        <p style="margin-top: 20px">
                            <div id="star-cont" style="padding-top: 0px;">
                                <span class="star4"></span>
                            </div>
                        </p>
                        <strong><a class="deal-price-link">78€</a></strong>
                    </div>
                </div>
                <div class="deals-inner-cont">
                    <div class="deal-price">
                        <label class="deal-price-link">
                            <img src="http://y.bstatic.com/images/hotel/square60/287/2876848.gif">
                    </div>
                    <div class="deal-details">
                        <label>
                            <a href="" target="_blank">Mandarin Oriental at CityCenter Las Vegas </a>
                        </label>
                        <p style="margin-top: 20px">
                            <div id="star-cont" style="padding-top: 0px;">
                                <span class="star5"></span>
                            </div>
                        </p>
                        <strong><a class="deal-price-link">190€</a></strong>
                    </div>
                </div>
            </div>
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
