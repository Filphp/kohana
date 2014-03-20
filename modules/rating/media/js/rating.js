// JavaScript Document
$(document).ready(function(){
	$('.minus, .plus').click(function(){
		var mark = $(this).attr('class');
		var id = $(this).parent('.rating').attr('id');
		if(mark == 'minus')
			set_rating(id, -1);
		else if(mark == 'plus')
			set_rating(id, 1);
	});

	function set_rating(id, rating_mark)
	{
		$.ajax({
			type: "POST",			
			url: "/rating/"+id,
			data: ({rating_id : id, rating_mark : rating_mark}),
			dataType: 'json',	
			success: function(data){
				if(data > 0)
					$('#rating_'+id).attr("class", "mark_plus");
				else if(data < 0)
					$('#rating_'+id).attr("class", "mark_minus");
				else
					$('#rating_'+id).attr("class", "mark_none");

				$('#rating_'+id).text(data);
			}
		});
	}
});	