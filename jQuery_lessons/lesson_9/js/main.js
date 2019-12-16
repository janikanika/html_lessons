$(function(){
	$('p').text('Dom element download')
});

$(window).load(function(){
});

$(window).unload(function(){
	alert('User, buy!');
})

$(window).resize(function(event){
	console.log('window size differents!')
});

$(window).scroll(function(event){
	console.log('Страница прокручена')
});