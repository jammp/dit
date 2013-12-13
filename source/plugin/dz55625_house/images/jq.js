var jq = jQuery.noConflict(); 
	jq(document).ready(function(){ 
	jq(".H_lisp dl").mouseover(function(){ 
	jq(this).addClass("over");}).mouseout(function(){ 
	jq(this).removeClass("over");}) 
	jq(".H_lisp dl:even").addClass("alt");
});
