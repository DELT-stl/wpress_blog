var postsFlickitySettings = {
  cellAlign: 'center',
  pageDots: false,
  wrapAround: true,
  imagesLoaded: true
};
 var notSelected = document.querySelectorAll('.post-card:not(.is-selected)');
  var notSelectedLength = notSelected.length;

  categoriesFlkty.on('dragStart', function(){
    var isSelected = document.querySelector('.slide.is-selected .post-card.is-selected');
    for (var i = 0; i < notSelectedLength; i++) {
      var notSelected = document.querySelectorAll('.post-card:not(.is-selected)');
      var notSelectedElem = notSelected[i];
      notSelectedElem.classList.add('to85');
    }
  });

  var postslength = document.querySelectorAll('.post-card').length;

  categoriesFlkty.on('settle', function(){
    for (var i = 0; i < postslength; i++) {
      var to85length = document.querySelectorAll('.to85').length;
      var all = document.querySelectorAll('.post-card');
      var allElem = all[i];
      allElem.classList.remove('to85');
    }
  });
  // allPhotosCounter
  var allPhotosCounter = document.querySelector('#allPhotosCounter');
  function allPhotosCounterUpdate() {
    allPhotosCounter.innerHTML = allPhotosFlickity.selectedIndex + 1 + '/' + allPhotosFlickity.cells.length;
  }
  allPhotosCounterUpdate();
  allPhotosFlickity.on( 'select', allPhotosCounterUpdate);
  
  // portraitsCounter
  var portraitsCounter = document.querySelector('#portraitsCounter');
  function portraitsCounterUpdate() {
    portraitsCounter.innerHTML = portraitsFlickity.selectedIndex + 1 + '/' + portraitsFlickity.cells.length;
  }
  portraitsCounterUpdate();
  portraitsFlickity.on( 'select', portraitsCounterUpdate);
  
  // weddingsCounter
  var weddingsCounter = document.querySelector('#weddingsCounter');
  function weddingsCounterUpdate() {
    weddingsCounter.innerHTML = weddingsFlickity.selectedIndex + 1 + '/' + weddingsFlickity.cells.length;
  }
  weddingsCounterUpdate();
  weddingsFlickity.on( 'select', weddingsCounterUpdate);
  
  // lovestoriesCounter
  var lovestoriesCounter = document.querySelector('#lovestoriesCounter');
  function lovestoriesCounterUpdate() {
    lovestoriesCounter.innerHTML = lovestoriesFlickity.selectedIndex + 1 + '/' + lovestoriesFlickity.cells.length;
  }
  lovestoriesCounterUpdate();
  lovestoriesFlickity.on( 'select', lovestoriesCounterUpdate);
  
  // albumsCounter
  var albumsCounter = document.querySelector('#albumsCounter');
  function albumsCounterUpdate() {
    albumsCounter.innerHTML = albumsFlickity.selectedIndex + 1 + '/' + albumsFlickity.cells.length;
  }
  albumsCounterUpdate();
  albumsFlickity.on( 'select', albumsCounterUpdate);
  
;