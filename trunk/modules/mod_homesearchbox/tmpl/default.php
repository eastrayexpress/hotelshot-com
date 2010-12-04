<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>				
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