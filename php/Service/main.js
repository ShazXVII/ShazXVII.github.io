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
  $("button").click(function() {
    $("#totallyhiddendiv").show();
  });
  $("#close").click(function() {
    $("#totallyhiddendiv").hide();
  });
  $(".underpara").children().click(function(){
    var buybtn = [vu5, vu10, vo10, vr10, tl, tp, ti, oe, sf, wsp, wspm, wspml, 1hc, xhc, 1hcj, xhcj, sp];
    var x = this.id;
    var xv2 = buybtn.indexOf(x);
    $("#submit").attr("action", buybtn[xv2]); 
  });
});
