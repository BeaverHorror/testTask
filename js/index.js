jQuery('document').ready(function(){

	$('#uploadFile').on('mouseover', uploadFileMouseOver); 	// Навелись
	$('#uploadFile').on('mouseout',  uploadFileMouseOut); 	// Покинули
	$('#uploadFile').on('mousedown', uploadFileMouseDown);	// Нажали 
	$('#uploadFile').on('mouseup',   uploadFileMouseUp);	// Отжали
	$('#uploadFile').on('click',     uploadFileClick);		// Клик
	
	function uploadFileMouseOver(){
		uploadFile.style.background= "#114A8A";
	}
	function uploadFileMouseOut(){
		uploadFile.style.background= "#225B9B";
	}
	function uploadFileMouseDown(){
		uploadFile.style.background= "#003979";
	}
	function uploadFileMouseUp(){
		uploadFile.style.background= "#114A8A";
	}
	
	function uploadFileClick(){
		//alert("Загрузить файл");
	}

});
