$(".row .mb-3").focusin(function () {
    $(this).find("span").animate({ opacity: "0" }, 200);
  });
  
  $(".row .mb-3").focusout(function () {
    $(this).find("span").animate({ opacity: "1" }, 300);
  });
  
  