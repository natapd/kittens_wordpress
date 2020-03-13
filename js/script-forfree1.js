(function(){
document.querySelector('.kittens__fastmenu__name').textContent=ForFree[NUM].name;
document.querySelector('.kitten__img').src=ForFree[NUM].src;
document.querySelector('.kitten__name').textContent=ForFree[NUM].name;
document.querySelector('.kitten__sex').textContent=ForFree[NUM].sex;
document.querySelector('.kitten__breed').textContent=ForFree[NUM].breed;
document.querySelector('.kitten__color').textContent=ForFree[NUM].color;
document.querySelector('.kitten__bdate').textContent=ForFree[NUM].bdate;




var KittenPhotos=ForFree[NUM].photos;



var KittenPhotoTemp=document.querySelector('#kittens__photos').content.querySelector('div');
var KittenPhotoBlock=document.querySelector('.kitten_photoBlock'); 

var renderKittenPhoto=function(photo){
  var elem=KittenPhotoTemp.cloneNode(true);
  
  elem.querySelector('.kitten__gallery__img').src=photo;
  elem.querySelector('.kitten__gallery__img').addEventListener('click',function(){
    window.currentPhoto=photo;
    window.currentarray=KittenPhotos;
    //window.PhotosPopup.onPhotoClick(photo);
    window.PhotosPopup.onPhotoClick(window.currentPhoto,window.currentarray);
  });
  return elem;
}

for (var i=0;i<KittenPhotos.length;i++){

KittenPhotoBlock.appendChild(renderKittenPhoto(KittenPhotos[i]));
}
//*************Заполнение выбранных карточек котят******************************/
var CatCart=document.querySelector('#kittens__also').content.querySelector('li');
var CatForSaleList=document.querySelector('.kittens__also__list');

var renderCatsCart=function(cat){
  var elem=CatCart.cloneNode(true);
  elem.querySelector('.kittens__also__img').src=cat.src;
  elem.querySelector('.kittens__also__content').href=cat.page;
  elem.querySelector('.kittens__also__name').textContent=cat.name;
  elem.querySelector('.kittens__also__sex').textContent=cat.sex;
  elem.querySelector('.kittens__also__breed').textContent=cat.breed;
  if(cat.status!=="free"){
  elem.querySelector('.kitten__also__status').textContent=cat.status;}
  else {elem.querySelector('.kitten__also__status').classList.add('visually-hidden');}
  return elem;
}

//ПЕРЕДЕЛАТЬ ЛОГИКУ ОТРИСОВКИ СВОБОДНЫХ К ПРОДАЖЕ
/*Выбор рандомного элемента массива*/
var randomf=function(LengthArray){

    var RandomI=Math.round(Math.random()*(LengthArray-1));
    return RandomI;

  };

function getRandom(arr,max) {
  var result=[];
    while (max>0){
    var rand=randomf(arr.length);
    
    if ((result.indexOf(arr[rand]) === -1)/*&&(rand!==NUM)*/) {
      result.push(arr[rand]); 
      max--;
    }
  }
    return result;
}
var FreeCats=Cats.filter(function(Cats){
  return Cats.status==="free";
});


//console.log(getRandom(Cats,6));
var RandomCats=getRandom(FreeCats,(FreeCats.length));

for (var i=0;i<RandomCats.length;i++){

CatForSaleList.appendChild(renderCatsCart(RandomCats[i]));
}

})();