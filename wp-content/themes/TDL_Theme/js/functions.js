$(function() {
	var showChar = 300;
	var ellipsestext = "...";
	var moretext = "more";
	var lesstext = "less";
	$('.more').each(function() {
		var content = $(this).html();
		if(content.length > showChar) {
			var c = content.substr(0, showChar);
			var h = content.substr(showChar, content.length - showChar);
			var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent">' + h + '</span>&nbsp;&nbsp;<span class="morelink" style="color:#475e8a; cursor:pointer;">' + moretext + '</span>';
			$(this).html(html);
		}
	});
	$('.morelink').click(function(){
		if($(this).hasClass('less')) {
			$(this).removeClass('less');
			$(this).html(moretext);
		} else {
			$(this).addClass('less');
			$(this).html(lesstext);
		}
		$(this).parent().find('.moreellipses').toggle();
		$(this).parent().find('.morecontent').toggle();
		return false;
	});
	
	
});