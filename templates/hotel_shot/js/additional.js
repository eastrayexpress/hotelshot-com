// autocomplete
jQuery(function() {
		var availableTags = [
			"New York",
			"York",
			"London",
			"Edinburgh",
			"Paris",
			"Berlin",
			"Hamburg",
			"Prague",
			"Rome",
			"Milan",
			"Genova",
			"Amsterdam",
			"Seattle",
			"Washington",
			"Antwerp",
			"Jakarta",
			"Tokyo","Tampa",
			"Vienna","Istanbul",
			"Lisabon","Bologna",
			"Barcelona","Las Vegas","Venezia","Prado",
			"Madrid","Bratislava",
			"Stockholm"
		];
		jQuery( "#autocomplete" ).autocomplete({
			source: availableTags
		});
	});
	
//datetime picker
jQuery(function() {
var dates = jQuery('#checkin, #checkout').datepicker({
	
defaultDate: "+1w",
minDate: +1,
buttonImageOnly: false,
showOtherMonths: true, 
minDate: 1,
numberOfMonths: 2,
onSelect: function(selectedDate) {
var option = this.id == "checkin" ? "minDate" : "maxDate";
var instance = jQuery(this).data("datepicker");
var date = jQuery.datepicker.parseDate(instance.settings.dateFormat || jQuery.datepicker._defaults.dateFormat, selectedDate, instance.settings);
dates.not(this).datepicker("option", option, date);}});});

