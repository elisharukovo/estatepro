// JavaScript Document
  $("button#submit").click(function(){
	  
	  $.post($("#myForm").attr("action"),
	    $("#myForm :input").serializeArray(),
	      function(data){
		 $("div#ack").html(data);
		 $("#ack").html(info);
		 }); 
		 
		 $("#myForm").submit(function(){
		 return false;
		 })
		 });