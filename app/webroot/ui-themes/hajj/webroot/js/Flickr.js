$(window).load(function() {
	$('#flickrimages').jflickrfeed({
		limit: 9,
		qstrings: {
			id: '84803076@N02'
		},
		itemTemplate: '<li><a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
	});
});