(function(){
var GraduatesTemp=document.querySelector('#graduates').content.querySelector('li');
var GraduatesList=document.querySelector('.graduates__list');


var renderGraduatesCart=function(cat){
  var elem=GraduatesTemp.cloneNode(true);
  
  elem.querySelector('.graduates__title').textContent=cat.name;
 
  return elem;
}
renderGraduatesPhotos=function(photo,ar,photomini){
var elem2=document.querySelector('#graduates__photos').content.querySelector('li').cloneNode(true);
    elem2.querySelector('.graduates__gallery__img').src=photomini;
    elem2.querySelector('.graduates__gallery__img').addEventListener('click', function () {
    window.currentPhoto=photo;
    window.currentarray=ar;
    window.PhotosPopup.onPhotoClick(window.currentPhoto,window.currentarray);
    
    });
    //console.log(i);
	//console.log(elem2);
return elem2;	

};	
for (var i=0;i<Graduates.length;i++){
	
	GraduatesList.appendChild(renderGraduatesCart(Graduates[i]));

};

var GraduatesGaleryList=document.querySelectorAll('.graduates__gallery-list');
	for (var i=0;i<Graduates.length;i++){
		for (var j=0;j<Graduates[i].photos.length;j++){
		  	
		  	GraduatesGaleryList[i].appendChild(renderGraduatesPhotos(Graduates[i].photos[j],Graduates[i].photos,Graduates[i].photosmini[j]));
		};
    };


	})();