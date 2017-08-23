jQuery(document).ready(function() {
	var base_url = 'http://localhost/api_marvel_teste/wp-content/themes/tema-personalizado/';
		var limitaCaracteres = function(val){
			var nova = '';
			var strs = val;
			for(i=0;i<30;i++) {
		      nova += strs.substr(i,1);
		   }
		   return nova+' ...';
		};

		var chamarRequisicao = function(){
		jQuery.ajax({
			url: base_url+'dao/apimarvel.php',
			method: 'GET',
			type: 'GET',
			dataType: 'JSON',
			success: function(data){	
				jQuery.each(data.data.results, function(i, value) {				
					var src = value.thumbnail.path + '.' + value.thumbnail.extension;
					var div = '<div class="col-md-3">';
						div += '<div class="images"><a href="'+value.id+'"><img src="'+src+'" title="'+value.title+'" alt="'+value.title+'"></a></div>';
						div += '<h3>'+value.title+'</h3>';
						div += '<p> '+limitaCaracteres(JSON.stringify(value.description))+'</p>';
						div += '</div>';
					jQuery('#resp').append(div);
					
				});
			},
			error: function(error){
				//console.log(error);
				
			},
			beforeSend: function(){
				jQuery('#resp').append('<img id="loader" src="'+base_url+'images/loader.gif">');
			},
			complete: function(){
				jQuery('#loader').remove();
			}
		});
		
	};

	


	chamarRequisicao();
});