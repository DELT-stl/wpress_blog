jQuery(document).ready(function ($) {
          var $window = $(window); //prepare window as jQuery object

  var $srcSets = $('.srcSet'); //get all images with srcSet clas
  $srcSets.each(function(){ //for each .srcSet do...
    var $currImg = $(this); //prepare current srcSet as jQuery object

    $currImg
      .load(function(){ //bind the load event
          var img = $currImg.get(0); //retrieve DOM element from $currImg

          //test currentSrc support, if not supported, use the old src
          var src = img.currentSrc ? img.currentSrc : img.src;

          //To the closest parent with bgFromSrcSet class,
          //set the final src as a background-image CSS
          $currImg.closest('.bgFromSrcSet').css('background-image', "url('"+src+"')");

          //remove processed image from the jQuery set
          //(to update $srcSets.length that is checked in the loadChecker)
          $srcSets = $srcSets.not($currImg);

          $currImg.remove(); //remove the <img ...> itself 
      })
    ;      

  });

  //window's load event is called even on following loads...
  $window.load(function(){    
    //prepare the checker
    var loadChecker = setInterval(function(){
        if( $srcSets.length > 0 ) //if there is still work to do...
            $srcSets.load(); //...do it!
        else
            clearInterval(loadChecker); //if there is nothing to do - stop the checker
    }, 150);  
  });
    });