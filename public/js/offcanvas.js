$(document).ready(function () {
  $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active')
  });
  
  $("div.panel-heading").on("click",function(){
  		$(this).parent("div").children(".panel-body").toggle(200);
  });
});