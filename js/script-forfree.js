(function(){




//*************Заполнение выбранных карточек котят******************************/
var CatCart=document.querySelector('#ingoodhands').content.querySelector('li');
var CatForSaleList=document.querySelector('.ingoodhands__list');

var renderCatsCart=function(cat){
  var elem=CatCart.cloneNode(true);
  elem.querySelector('.ingoodhands__item__link').href=cat.page;
  elem.querySelector('.ingoodhands__img').src=cat.src;
  elem.querySelector('.ingoodhands__name').textContent=cat.name;
  elem.querySelector('.ingoodhands__sex').textContent=cat.sex;
  elem.querySelector('.ingoodhands__breed').textContent=cat.breed;
  elem.querySelector('.ingoodhands__color').textContent=cat.color;
  elem.querySelector('.ingoodhands__link').href=cat.page;
  
  return elem;
}


for (var i=0;i<ForFree.length;i++){

CatForSaleList.appendChild(renderCatsCart(ForFree[i]));
}

})();