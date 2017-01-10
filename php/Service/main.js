$(document).ready(function(){
  $("#photoshop").hide();
  $("#aftereffects").hide();
  $("#staticwebsite").hide();
  $("#dynamicwebsite").hide();
  $("softwarehelp").hide();
  $("#premiere").show();
  $("#navbar").children().click(function() {
    var buttons = ["pr", "ph", "ae", "dw", "sw", "sh"];
    var buttons2 = [pr, ph, ae, dw, sw, sw];
    var divs = [premiere, photoshop, aftereffects, dynamicwebsite, staticwebsite, softwarehelp];
    var x = this.id;
    var xv2 = buttons.indexOf(x);
    $(divs[xv2]).show();
    $(divs[xv2]).siblings().hide();
    $(this).addClass("linkactive");
    $(this).siblings().removeClass("linkactive");
  });
});
