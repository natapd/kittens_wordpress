(function(){
document.querySelector('.kittens__fastmenu__name').textContent=Cats[NUM].name;
document.querySelector('.kitten__img').src=Cats[NUM].src;
document.querySelector('.kitten__name').textContent=Cats[NUM].name;
document.querySelector('.kitten__sex').textContent=Cats[NUM].sex;
document.querySelector('.kitten__breed').textContent=Cats[NUM].breed;
document.querySelector('.kitten__color').textContent=Cats[NUM].color;
document.querySelector('.kitten__bdate').textContent=Cats[NUM].bdate;
if (Cats[NUM].status!=='free')
  {
  document.querySelector('.kitten__status').textContent=Cats[NUM].status;
  }
    else {
      document.querySelector('.kitten__status').classList.add('visually-hidden');
    };



var BookBtn=document.querySelector('.kitten__book-btn');

if (Cats[NUM].status==='Забронирован'){
BookBtn.classList.add('visually-hidden');
}
var KittenPhotos=Cats[NUM].photos;
var KittenPhotosMini=Cats[NUM].photosmini;



var KittenPhotoTemp=document.querySelector('#kittens__photos').content.querySelector('div');
var KittenPhotoBlock=document.querySelector('.kitten_photoBlock'); 

var renderKittenPhoto=function(photo,photomini){
  var elem=KittenPhotoTemp.cloneNode(true);
  
  elem.querySelector('.kitten__gallery__img').src=photomini;
  elem.querySelector('.kitten__gallery__img').addEventListener('click',function(){
    window.currentPhoto=photo;
    window.currentarray=KittenPhotos;
    //window.PhotosPopup.onPhotoClick(photo);
    window.PhotosPopup.onPhotoClick(window.currentPhoto,window.currentarray);
  });
  return elem;
}

for (var i=0;i<KittenPhotos.length;i++){

KittenPhotoBlock.appendChild(renderKittenPhoto(KittenPhotos[i],KittenPhotosMini[i]));
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


//console.log(Cats);
var RandomCats=getRandom(FreeCats,(FreeCats.length));

for (var i=0;i<RandomCats.length;i++){

CatForSaleList.appendChild(renderCatsCart(RandomCats[i]));
}
//for (var i=0;i<ForFree.length;i++){

CatForSaleList.appendChild(renderCatsCart(ForFree[0]));
//}

})();