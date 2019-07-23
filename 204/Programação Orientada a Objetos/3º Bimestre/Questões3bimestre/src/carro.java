
public class carro {
	String cor;
	String modelo;
	
	int velocidadeAtual;
	double velocidadeMaxima;
		
	boolean ligar(){
		boolean ligar = velocidadeAtual > 0;
		return ligar;
		
	}
	
	double acelerar(){
		double acelerar = velocidadeAtual;
		velocidadeAtual ++;
		return acelerar;
		
	}
	
	
	
	
}
