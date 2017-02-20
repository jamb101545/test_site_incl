

$(document).ready(function(){
  $('img').mouseover(function(){
   $(this).addClass('magictime '+$(this).data('class')).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(this).removeClass()
    });
  })
})