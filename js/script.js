
//take JSON database and turn it into timeline
$(document).ready(function() {
 

 	//navigtion styling
 	var bodyClass = $('body').attr('class');
 	var navId = '#nav' + bodyClass;
 	$(navId).attr('id', 'currentpage');

 	//checks for timeline page and calls functions to format JSON data.
	if($('body').is('.timeline')){
		$.getJSON("db/timeline.json", function(data) {
			var timeline_data = data.results;

			var format_timeline = format_dates(timeline_data);
			$('.content').append(format_timeline);
		});
	}

	if(!$('body').is('.home')) {
	//change navigation styling and position from index page.
	$('.navigator').attr('id', 'navStyling');
	}

	function format_dates(dates) {
	var form_node = $('<form class="formTimeline">');
	$.each(dates, function(key, val) {
		var fs_node = $('<fieldset>');
		var legend_node = $('<legend>');
		var label_node = $('<label>');
		legend_node.text(val.date);
		label_node.text(val.events);
		fs_node.append(legend_node);
		fs_node.append(label_node);
		form_node.append(fs_node);
	});
		return form_node;
	}

});
