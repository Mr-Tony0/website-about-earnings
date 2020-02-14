var soft = document.getElementById('soft');
var post =  document.getElementById('post');
var keys =  document.getElementById('keys');
window.onload = function(){
	post.click();		
}
$(soft).on('click',function(){
	$('.type').hide();
	$('.level').hide();
	$('#one').hide();
	$('#two').show();
	$('#free').hide();
	$('.keys').hide();
	$('#noKey').show();
})
$(post).on('click',function(){
	$('#two').hide();
	$('.type').show();
	$('.level').show();
	$('#one').show();
	$('#free').hide();
	$('.keys').hide();
	$('#noKey').show();
})
$(keys).on('click',function(){
	$('.type').show();
	$('.level').show();
	$('.keys').show();
	$('#one').hide();
	$('#two').hide();
	$('#free').show();
	$('#link').hide();
	$('#noKey').hide();
})