function uploadImage(file_data, path){
	var form_data = new FormData();                  // Creating object of FormData class
	form_data.append("file", file_data)              // Appending parameter named file with properties of file_field to form_data
	form_data.append("path", path);

	return $.ajax({
        url: "/images/upload",
        dataType: 'script',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         // Setting the data attribute of ajax with file_data
        type: 'post',
        dataType: 'json',
        success: function(msg){
		 	return msg
		}
	})
}