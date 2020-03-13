(function(){

var CatSire=document.querySelector('#sire-cats').content.querySelector('li');
var SireListBoys=document.querySelector('.sireBoys__list');
var SireListGirls=document.querySelector('.sireGirls__list');

var renderSireCatsCart=function(cat){
  var elem=CatSire.cloneNode(true);
  elem.querySelector('.sire__img').src=cat.src;
  elem.querySelector('.sire__name').textContent=cat.name;
  elem.querySelector('.sire__description__sex').textContent=cat.sex;
  elem.querySelector('.sire__description__breed').textContent=cat.breed;
  elem.querySelector('.sire__description__color').textContent=cat.color;
  elem.querySelector('.sire__description__birthdate').textContent=cat.bdate;
  
  elem.querySelector('.sire__gallery-photo1').src=cat.photos[0];
  elem.querySelector('.sire__gallery-photo1').addEventListener('click', function () {
    window.currentPhoto=cat.photos[0];
    window.currentarray=cat.photos;
    window.PhotosPopup.onPhotoClick(window.currentPhoto,window.currentarray);
    
    
  });
  elem.querySelector('.sire__gallery-photo2').src=cat.photos[1];
  elem.querySelector('.sire__gallery-photo2').addEventListener('click', function () {
    window.currentPhoto=cat.photos[1];
    window.currentarray=cat.photos;
    window.PhotosPopup.onPhotoClick(window.currentPhoto,window.currentarray);
    
    
  });
  elem.querySelector('.sire__gallery-photo3').src=cat.photos[2];
  elem.querySelector('.sire__gallery-photo3').addEventListener('click', function () {
    window.currentPhoto=cat.photos[2];
    window.currentarray=cat.photos;
    window.PhotosPopup.onPhotoClick(window.currentPhoto,window.currentarray);
    
    });
 
  return elem;
}


for (var i=0;i<SireCatsBoys.length;i++){

SireListBoys.appendChild(renderSireCatsCart(SireCatsBoys[i]));
};
for (var i=0;i<SireCatsGirls.length;i++){

SireListGirls.appendChild(renderSireCatsCart(SireCatsGirls[i]));
};




})();