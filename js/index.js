
//button scoll animation
$("a[href$='ContactButton']").click(function () {
    $("html, body").animate({
        scrollTop: $("#Contact").offset().top
    }, 1200);
    return true;
});
$("a[href$='PortfolioButton']").click(function () {
    $("html, body").animate({
        scrollTop: $("#Portfolio").offset().top
    }, 1200);
    return true;
});
$("a[href$='AboutMeButton']").click(function () {
    $("html, body").animate({
        scrollTop: $("#AboutMe").offset().top
    }, 1200);
    return true;
});

//collapsable menu. needs work
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
;
//give appropriate colors for name, email and message input forms
function changeClass() {
    if ($("#emailinput").val()){
        document.getElementById("emailinputform").className = "col-md-11 inputGroupContainer has-success";
    } else {
        document.getElementById("emailinputform").className = "col-md-11 inputGroupContainer has-warning";
    }
    if ($("#nameinput").val()){
        document.getElementById("nameinputform").className = "col-md-11 inputGroupContainer has-success";
    }else{
        document.getElementById("nameinputform").className = "col-md-11 inputGroupContainer has-warning";
    }

    if ($("#messageinput").val()){
        document.getElementById("messageinputform").className = "col-md-11 inputGroupContainer has-success";
    }else{
        document.getElementById("messageinputform").className = "col-md-11 inputGroupContainer has-error";
        document.getElementById("messagesent").innerHTML = "Please fill out a message";
    }   
}
//remaining characters left to type in textarea
var max = 1500;
$("#messageinput").keyup(function (e) {
    $("#count").text((max - $(this).val().length) + " characters left.");
});

//if user clicks outside of textarea, and textarea is empty, then dont display how many characters left
$('#messageinput').on('blur', function (e) {
    if (!$("#messageinput").val()) {
        $("#count").text('\xa0');
    }
});



