$(function() {
	
	$('.print').click(function() {
		var container = $(this).attr('rel');
		$('#print_area').printArea();
		return false;
	});
        
        	
});
/**
 * Message Selected Members
 */
$('#selecctall').click(function(event) {  //on click
    if(this.checked) { // check select status
	$('.phone_numbers').each(function() { //loop through each checkbox
	    this.checked = true;  //select all checkboxes with class "checkbox1"               
	});
    }else{
	$('.phone_numbers').each(function() { //loop through each checkbox
	    this.checked = false; //deselect all checkboxes with class "checkbox1"                       
	});         
    }
});
$("#send_sms").click(function(){
	if($("#msg_div").hasClass("no-display")){
		$("#msg_div").removeClass('no-display');
	}else{
		$("#msg_div").addClass('no-display');
	}
});
/**
 * End of messaging selected members
 */
$("#branch_name").change(function(){
	$("#branch_menu").submit();
});
//handels showing of editing account number text field
$("#change_acc_no").click( function(){
   if( $(this).is(':checked') ){
	$("#new_acc_no").removeClass('no-display');
   }else{
	$("#new_acc_no").addClass('no-display');
   }
});
    //date picker code

$(document).ready(function(){
    $("#billing_table > tbody > tr:odd").addClass("odd");
    $("#billing_table > tbody > tr:not(.odd)").addClass("even");  

});
$("#filter").change(function(){
	if($("#filter").val() == "range"){
		$("#date_range").removeClass('no-display');
		$("#singledate").addClass('no-display');
	}else if($("#filter").val() == "date")
	{
		$("#singledate").removeClass('no-display');
		$("#date_range").addClass('no-display');
	}else{
            
            
                                                     $("#singledate").addClass('no-display');
		$("#date_range").addClass('no-display');
                              }
        
                  
});