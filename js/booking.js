
(function(){
var Popup=document.querySelector('.formBooking');

var BookBtn= document.querySelector('.kitten__book-btn');

var CloseBtn=Popup.querySelector('.close-popup__booking');
var KittenField=Popup.querySelector('.kitten_booked');

var KittenName=document.querySelector('.kitten__name').textContent;

console.log(KittenName);
KittenField.placeholder=KittenName;
KittenField.value=KittenName;

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
if (BookBtn!==null)
BookBtn.addEventListener('click', onLinkClick);

})();