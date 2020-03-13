
(function(){
var Popup=document.querySelector('.formEmail');
var EmailLink1= document.querySelector('.EmailLink');
var CloseBtn=document.querySelector('.close-popup');



var onPopupEscPress=function(evt){
   if (evt.keyCode===27 ){
   	onCloseClick();
   }
};

var onCloseClick=function(){
	
  Popup.classList.add("hidden");
  document.removeEventListener('keydown',onPopupEscPress);
}

var onLinkClick=function(){
  
  Popup.classList.remove("hidden");
CloseBtn.addEventListener('click',onCloseClick);
document.addEventListener('keydown',onPopupEscPress);

}  

EmailLink1.addEventListener('click', onLinkClick);

})();