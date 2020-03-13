(function(){



var MammyCat=SireCatsGirls.find(function(Cats){
	return Cats.id==="sireGirl01";
});
var DaddyCat=SireCatsBoys.find(function(Cats){
	return Cats.id==="sireBoy01";
});



//*************Фильтрация массива котят по родителям******************************/
var SortCats=Cats.filter(function(Cats){
	return Cats.daddy===DaddyCat.id;
}).filter(function(Cats){
	return Cats.mammy===MammyCat.id;
});


//*************Заполнение иконок РОДИТЕЛИ******************************/
  document.querySelector('.mammy-icon').src=MammyCat.src;
  document.querySelector('.mammy-name').textContent=MammyCat.name;
  document.querySelector('.daddy-icon').src=DaddyCat.src;
  document.querySelector('.daddy-name').textContent=DaddyCat.name; 

//*************Заполнение выбранных карточек котят******************************/
var CatCart=document.querySelector('#kittens').content.querySelector('li');
var CatForSaleList=document.querySelector('.kittens__list');

var renderCatsCart=function(cat){
  var elem=CatCart.cloneNode(true);
  elem.querySelector('.kittens__item__link').href=cat.page;
  elem.querySelector('.kittens__img').src=cat.src;
  elem.querySelector('.kittens__name').textContent=cat.name;
  elem.querySelector('.kittens__sex').textContent=cat.sex;
  elem.querySelector('.kittens__breed').textContent=cat.breed;
  elem.querySelector('.kittens__color').textContent=cat.color;
  elem.querySelector('.kittens__link').href=cat.page;
  if(cat.status!=="free"){
  elem.querySelector('.kitten__also__status').textContent=cat.status;}
  else {elem.querySelector('.kitten__also__status').classList.add('visually-hidden');}
  return elem;
}


for (var i=0;i<SortCats.length;i++){

CatForSaleList.appendChild(renderCatsCart(SortCats[i]));
}

})();