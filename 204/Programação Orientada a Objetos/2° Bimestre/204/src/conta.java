
public class conta {
	int numero;
	String nome;
	double saldo;
	double limite;
	
	
	
	
	void sacar (double valor){
		saldo = saldo - valor;
	}
	void deposita(double valor){
		saldo = saldo + valor;
	}
	 double saldo1(){
		return saldo;
	}
	 void transfere(conta conta1, double valor){
		 
	 }
}

