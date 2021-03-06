$(window).on('scroll',function(){
  if($(window).scrollTop()){
      $('.navigation').addClass('fixed-menu');
      console.log("scrolled");
  }
  else{
      $('.navigation').removeClass('fixed-menu');
  }
});


$(document).ready(function() {
  $(".buy__form").submit(function(event){
    event.preventDefault();
    console.log('clickedddd');
    var fullname = $('#fullname').val();
    var phone = $('#phone').val();
    var phoneConfirmation = $('#phone2').val();
    var adresse = $('#adresse').val();
    if( phone == "" || phoneConfirmation == ""){
      $(".errorconf").html("phone fields are required");
    }
    if(phone != phoneConfirmation){
      $(".errorconf").html("phone numbers are not the same");
      $('#phone').css({"border": "1px solid #F56E96"});
      $('#phone2').css({"border": "1px solid #F56E96"});
    }
  })
})