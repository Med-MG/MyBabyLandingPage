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
      return;
    }
    if(phone != phoneConfirmation){
      $(".errorconf").html("phone numbers are not the same");
      $('#phone').css({"border": "1px solid #F56E96"});
      $('#phone2').css({"border": "1px solid #F56E96"});
      return;
    }

    // console.log('fdfdfdf')

    var dataString = `fullname=${fullname}&phone=${phone}&adresse=${adresse}`;
    $("#popup").addClass('popup');
    $(".popup__content").addClass('show-content');
    // $.ajax({
    //   type : "POST",
    //   url : "functions.php",
    //   data : dataString,
    //   cache : false,
    //   success : function() {
    //     $("#popup").addClass('popup');
    //     $(".popup__content").addClass('show-content');
    //     fbq('track', 'Purchase');
    //   }
    // });

  })
})