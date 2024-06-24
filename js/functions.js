

$(function(){

	
	function aplicarerro_text(){
		$('.form input[type=text]').css('border','2px solid red');
		$('.form input[type=text]').css('color','red');
		$('.form input[type=text]').val('Campo Invalido!');
	}

	function resetarcampo_text(){
		$('.form input[type=text]').css('border','1px solid #ccc');
		$('.form input[type=text]').css('color','black');
		$('.form input[type=text]').val('');
	}

	function aplicarerro_email(){
		$('.form input[type=email]').css('border','2px solid red');
		$('.form input[type=email]').css('color','red');
		$('.form input[type=email]').val('Campo Invalido!');
	}

	function resetarcampo_email(){
		$('.form input[type=email]').css('border','1px solid #ccc');
		$('.form input[type=email]').css('color','black');
		$('.form input[type=email]').val('');
	}

	$('form#form1').submit(function(){
		var name = $('input[name=name]').val();
		var string_array = name.split(' ');
		var contador = name.split(' ').length;
		
		if(contador >= 2){
			for(var i = 0; i < contador; i++){
				if(string_array[i].match(/^[A-Z]{1}[a-z]{1,}$/)){

				}
				else{
					aplicarerro_text();
					return false;
				}
			}
		}
		else{
			aplicarerro_text();
			return false;
		}

	})


	$('form#form1').submit(function(){

		var email = $('input[name=email]').val();
		var email_array = email.split('@');

		if(email_array[1] != 'gmail.com' &&  email_array[1] != 'hotmail.com'){
			aplicarerro_email();
			return false;
		}

	})



	$('form#form1 input[type=text]').focus(function(){
		resetarcampo_text();
	})

	$('form#form1 input[type=email]').focus(function(){
		resetarcampo_email();
	})

	
	$('.button1 a[href^="#"]').on('click', function(e) {
	e.preventDefault();
	var id = $(this).attr('href'),
	targetOffset = $(id).offset().top;
			
	$('html, body').animate({ 
		scrollTop: targetOffset - 100
	}, 800);


	});


});

