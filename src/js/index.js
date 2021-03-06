$(window).on('scroll',function(){
  if($(window).scrollTop()){
      $('.navigation').addClass('fixed-menu');
      console.log("scrolled");
  }
  else{
      $('.navigation').removeClass('fixed-menu');
  }
});

