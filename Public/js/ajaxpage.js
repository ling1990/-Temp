$(function(){

	$('body').delegate('.pagination a','click',function(){
		$.get(this.href,function(data){
			var pageLode = layer.load();
			$('#ajaxfresh').html(data);
			layer.close(pageLode);
		});

		return false;
	});
	



});