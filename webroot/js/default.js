$(function(){
	//Validação do formulário de contatos
	$('#frm_contacts').validate({
		rules:{
			name:{
				required:true,					
			},
			email:{
				required: true,
				email: true,				
			},
			description:{
				required: true,
				minlength: 20
			}
			
		},
		messages:{
			name:{
				required:"Esse campo não pode ser vazio",
			},
			email:{
				required:"Esse campo não pode ser vazio",
				email: "Informe um e-mail válido"
			},
			description:{
				required: "Esse campo não pode ser vazio!",
				minlength: "Mínimo de 20 carácteres"
			}
		}
	});
});