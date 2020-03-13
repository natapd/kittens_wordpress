(function(){
var ESC_KEYCODE=27;
var ElemBefore=document.querySelector(".main-header");
var FullPhoto=document.querySelector('.full__photo');


var onPopupCloseClick=function(){
  var LeftArrow=document.querySelector('.full__photo__left');
   var RightArrow=document.querySelector('.full__photo__right');
   var LeftArea=document.querySelector('.full__photo__LeftArea');
   var RightArea=document.querySelector('.full__photo__RightArea');
     LeftArrow.removeEventListener('click',onLeftClick);
     RightArrow.removeEventListener('click',onRightClick);
     LeftArea.removeEventListener('click',onLeftClick);
     RightArea.removeEventListener('click',onRightClick);
    FullPhoto.classList.add('hidden');
    document.removeEventListener('keydown',onPopupEscPress);

  
};
var onPopupEscPress=function(evt){
   if (evt.keyCode===ESC_KEYCODE ){onPopupCloseClick();}
};
var onPhotoClick=function(photo,ar){
    
    
   FullPhoto.querySelector(".full__photo__img").src=photo;
   
   FullPhoto.classList.remove('hidden');
   var LeftArrow=document.querySelector('.full__photo__left');
   var RightArrow=document.querySelector('.full__photo__right');
   //ПЕРЕДАТЬ ПАРАМЕТР МАССИВА НА КОТОРОМ ПЕРЕБИРАЮТСЯ ФОТКИ
   var LeftArea=document.querySelector('.full__photo__LeftArea');
   var RightArea=document.querySelector('.full__photo__RightArea');
   
   LeftArrow.addEventListener('click',onLeftClick);
   RightArrow.addEventListener('click',onRightClick);
   LeftArea.addEventListener('click',onLeftClick);
   RightArea.addEventListener('click',onRightClick);
   /*console.log(window.currentPhoto);
    console.log(FindIndexNextOrPrevPhoto(SireCatsBoys[0].photos,window.currentPhoto,'prev')); */
   var PopupClose=document.querySelector(".full__photo__close");
   
   PopupClose.addEventListener('click',onPopupCloseClick);
   document.addEventListener('keydown',onPopupEscPress); 
};


var FindIndexNextOrPrevPhoto=function(arr,current,elem){
  
    var currentIndex=arr.indexOf(current);

    var nextIndex=currentIndex+1;
      if(nextIndex>arr.length-1){nextIndex=0;}
    var prevIndex=currentIndex-1
      if(prevIndex<0){prevIndex=arr.length-1}

    if (elem==="next"){ 
      
      return nextIndex;}
    if (elem==="prev"){
      
      return prevIndex;}

}
var onLeftClick=function(){
  
 
  var PrevInd=FindIndexNextOrPrevPhoto(window.currentarray,window.currentPhoto,'prev');
  
  FullPhoto.querySelector(".full__photo__img").src=window.currentarray[PrevInd];

  window.currentPhoto=window.currentarray[PrevInd];
  

};
var onRightClick=function(ar){
  
  var NextInd=FindIndexNextOrPrevPhoto(window.currentarray,window.currentPhoto,'next');
  
  FullPhoto.querySelector(".full__photo__img").src=window.currentarray[NextInd];
  window.currentPhoto=window.currentarray[NextInd];
  
};

/*var onLeftClick=function(){
  FullPhoto.querySelector(".full__photo__img").src=window.prevPhoto;
}
var onRightClick=function(){
  FullPhoto.querySelector(".full__photo__img").src=window.nextPhoto;
}
*/

window.PhotosPopup={
	
	onPhotoClick:onPhotoClick
};
})();