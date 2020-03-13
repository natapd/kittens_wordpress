(function(){
//*********Свайп слайдов*****************************

var SliderItem=document.querySelector('.slider__item');
var SliderBlock = document.querySelector(".slider__photo");
var FirstSlide=SliderBlock.querySelector('.slide1');
var SecondSlide=SliderBlock.querySelector('.slide2');
var ThirdSlide=SliderBlock.querySelector('.slide3');
// вызов функции swipe с предварительными настройками
window.swipe(SliderBlock, { maxTime: 1000, minTime: 100, maxDist: 150,  minDist: 60 });

// обработка свайпов
//Направление, дистанция и потраченное на свайп время передаются в функцию-обработчик 
//как свойства e.detail.dir, e.detail.dist и e.detail.time соответственно. 
//При необходимости доступно обращение к полному событию — e.detail.full
var ChangeSlideToRight=function(){
      var currentSlide=SliderBlock.querySelector('.active');
             if (currentSlide.classList.contains('slide1')){
              //console.log('Назначить третьему эктив и удалить вх');
              ThirdSlide.classList.remove('visually-hidden');
              ThirdSlide.classList.add('active');
             };
             if (currentSlide.classList.contains('slide2')){
              //Назначить 1 эктив
              FirstSlide.classList.remove('visually-hidden');
              FirstSlide.classList.add('active');
             };
             if (currentSlide.classList.contains('slide3')){
              //Назначить 2 эктив
              SecondSlide.classList.remove('visually-hidden');
              SecondSlide.classList.add('active');
             };
          currentSlide.classList.remove('active');
          currentSlide.classList.add('visually-hidden');

};
var ChangeSlideToLeft=function(){
  var currentSlide=SliderBlock.querySelector('.active');
       if (currentSlide.classList.contains('slide1')){
        //console.log('Назначить 2 эктив и удалить вх');
        SecondSlide.classList.remove('visually-hidden');
        SecondSlide.classList.add('active');
       };
       if (currentSlide.classList.contains('slide2')){
        //Назначить 3 эктив
        ThirdSlide.classList.remove('visually-hidden');
        ThirdSlide.classList.add('active');
       };
       if (currentSlide.classList.contains('slide3')){
        //Назначить 1 эктив
        FirstSlide.classList.remove('visually-hidden');
        FirstSlide.classList.add('active');
       };
    currentSlide.classList.remove('active');
    currentSlide.classList.add('visually-hidden');

};
SliderBlock.addEventListener("swipe", function(e) {
  //console.log(e.detail);
  if (e.detail.dir === 'right'){
  	//console.log('право');
  	ChangeSlideToRight();
  };
  if (e.detail.dir === 'left'){
  	//console.log('лево');
  	ChangeSlideToLeft();
  };
});

//*******************Переключение слайдов по кнопке****************/
var LeftArrow=SliderBlock.querySelector('.slider__arrows-left');
var RightArrow=SliderBlock.querySelector('.slider__arrows-right');
LeftArrow.addEventListener('click',function(){
  ChangeSlideToLeft();
});
RightArrow.addEventListener('click',function(){
  ChangeSlideToRight();
});


//****************************************************************/
/*var CatCart=document.querySelector('#kittens-for-sale').content.querySelector('li');
var CatForSaleList=document.querySelector('.kittens-for-sale__list');
var renderCatsCart=function(cat){
  var elem=CatCart.cloneNode(true);
  elem.querySelector('.kittens-for-sale__img').src=cat.src;
  elem.querySelector('.kittens-for-sale__name').textContent=cat.name;
  elem.querySelector('.kittens-for-sale__btn').href=cat.page;
  if (cat.status!=='free')
  {
  elem.querySelector('.kitten__status').textContent=cat.status;
  }
    else {
      elem.querySelector('.kitten__status').classList.add('visually-hidden');
    };
  return elem;
} */
/*Выбор рандомного элемента массива*/
/*var randomf=function(LengthArray){

    var RandomI=Math.round(Math.random()*(LengthArray-1));
    return RandomI;

  };

function getRandom(arr,max) {
  var result=[];
    while (max>0){
    var rand=randomf(arr.length);
    
    if (result.indexOf(arr[rand]) === -1) {
      result.push(arr[rand]); 
      max--;
    }
  }
    return result;
}
var RandomCats=getRandom(Cats,3);

for (var i=0;i<RandomCats.length;i++){

CatForSaleList.appendChild(renderCatsCart(RandomCats[i]));
} */
})();
