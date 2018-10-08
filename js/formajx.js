	$('form.ajax').on('submit', function() {

	var that = $(this),
		url = that.attr('action'),
		type = that.attr('method'),
		data = {}

	that.find('[name]').each(function(){
		var that = $(this),
			name = that.attr('name'),
			value = that.val();

		data[name] = value;
	});

	$.ajax({
		url: url,
		type: type,
		data: data,  
    success:function(data){  
      $("form").trigger("reset");  
      $('#sn,#sc,#ss').fadeIn().html(data);  
      setTimeout(function(){  
           $('#sn,#sc,#ss').fadeOut("Slow");  
      }, 3000);          
    }
  });
          
      return false;
});