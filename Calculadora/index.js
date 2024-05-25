//pega o id do input
let input = document.getElementById('visor')

var ultimonum = ""

//função que pega o número que foi digitado 
function pegarnumero(numero){
	//condição que identifica os sinais das operações 
	if(numero == "+" || numero == "-" || numero == "*"|| numero == "/"){
		//condição para se caso o  
		if(ultimonum == ""){
			return
		}else if(ultimonum == "+" || ultimonum == "-" || ultimonum == "*"|| ultimonum == "/"){
			limpasoummesmo()
		}
	}
	var numero1 = input.value+=numero
	ultimonum = numero
}

//função que faz o cálculo  
function calculate() {
			//pega o id do visor 
            var visor = document.getElementById('visor');
            //função que realiza cálculos aritiméticos de acordo com o value do input
			var result = eval(visor.value);		
            visor.value = result;
}

//função que apaga tudo que está no input 
function limpatudo(){
	input.value=''
}

//função que apaga somente o último número que foi digitado  
function limpasoummesmo(){
	input.value=input.value.replace(input.value.charAt(input.value.length-1), '')
}