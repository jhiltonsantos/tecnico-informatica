public class Automovel {
	
	String modelo;
	String cor;
	int combustivel;
	
	int preco(){
		int tipo = 0;
		switch (combustivel){
		case 1: tipo = 12000;
		break;
		case 2: tipo = 10500;
		break;
		case 3: tipo = 20000;
		break;
		case 4: tipo = 13000;
		break;
		}
		return tipo;
		
	}
	
	String modelo_car() {
		return modelo;
	}
	
	String cor_car() {
		return cor;
	}
	
	
	/*void impressao(){
		String nome="";
		switch (combustivel){
		case 1: nome = "Gasolina";
		break;
		case 2: nome = "Alcool";
		break;
		case 3: nome= "Diesel";
		break;
		case 4: nome= "Gas";
		break;
		
		}
	}*/
		
}
