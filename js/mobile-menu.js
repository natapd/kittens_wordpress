//*********Мобильное меню*****************************
(function(){
var MainNav=document.querySelector('.main-nav');
var Toggle=document.querySelector('.main-nav__toggle');

MainNav.classList.remove('main-nav--nojs');

Toggle.addEventListener('click',function(){
	if(MainNav.classList.contains('main-nav--closed')){
		MainNav.classList.remove('main-nav--closed');
		MainNav.classList.add('main-nav--opened');
	} else{
		MainNav.classList.add('main-nav--closed');
		MainNav.classList.remove('main-nav--opened');
	}
});
})();