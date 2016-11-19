$(document).ready(function(){
	//This will activate all popovers
	$(function () { $("[data-toggle = 'popover']").popover(); })



	$(".addToCart").click(function(){
		//removing cart logo
		$("#cartLogo").removeClass("glyphicon glyphicon-shopping-cart");
		
		var id=this.id;
		$.ajax({
			url:"add_to_cart.php?action=add&id="+id,
			type:"GET",
			contentType: "application/json; charset=utf-8",
			dataType: "json",
				async: false,
			success: function(response){
				$("#noOfItemInCart").html(response[1]);
				var newItem=$("#noOfItemInCart").html();
				if(response[0]==0)
				{
					var text="Product Already in Cart";
				}
				else
				{
					var text="Product Added";
				}
				$(".showPopover").attr("data-content",text);
				$('.showPopover').popover('show');

				//to close popover after 1sec
				setTimeout(function(){
					$('.showPopover').popover('hide')
				},1000);
			}
		});	
	});
});