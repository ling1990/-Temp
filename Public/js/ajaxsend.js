// JavaScript Document
$(function(){
	var options = { 
        beforeSubmit:  showRequest, 
        success:       showResponse,
		resetForm: false, 
		dataType:  'json',
    };	
	
    $('#form1').submit(function() {
        $(this).ajaxSubmit(options); 
        return false; 
    });
});
	

	



//ajax提交之前，加载此函数，显示加载进度条
function showRequest(formData, jqForm, options) { 
	layer.load();
    return true; 
}
 
//ajax提交之后，加载此函数，根据返回值，显示提示对话框
function showResponse(responseText, statusText)  { 
	layer.closeAll('loading');
	Confirm(responseText.status,responseText.title);
}

//弹出确认对话框,点确定后重载内容
function Confirm(status,title){
	if(status == 1){
		layer.alert(title, {icon: 1}, function(index){
			layer.closeAll();
			window.location.reload();
		});
	}else if(status == 2){
		layer.msg(title);
	}else if(status == 3){
			layer.closeAll();
			window.location.href=Logn_in;
	}
}




