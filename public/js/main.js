$(document).ready(function(){

  //hides dropdown content
  $(".content").hide();

  //unhides first option content
  $("#option1").show();

  //listen to dropdown for change
  $(".dropdown").change(function(){
    //rehide content on change
    $('.content').hide();
    //unhides current item
    $('#'+$(this).val()).show();
  });

});
