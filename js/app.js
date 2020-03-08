$(function() {

  // var trans = function(){
  // $('.each > p').html('<p><img src="./img/choki.png"></p>');
  // };

  // setTimeout(trans,500);

  $('.kakegoe').delay(3000)
  .queue(function(next){
    $(this).hide();
    next();
  });

  $('.result').delay(3000)
  .queue(function(next){
    $(this).show();
    next();
  });

  $('.comment').delay(4500)
  .queue(function(next){
    $(this).show();
    next();
  });

  // この下は消さない
});
