$(document).ready(function(){ 
       setTimeout(function(){ 
	$("#loadingImg").fadeIn(2000); 
       });
});

$(document).ready(function(){
       init();
       toggleUI(muiBtn,gnbNav);
});

function init(){
       muiBtn = $('.toggleBtn');
       gnbNav = $('header div nav');
   }

function toggleUI(btn,target){
       $(btn).click(function(){
           $(target).toggleClass('active');
       });
   }