
public class Funcionario {
	int id;
	String nome;
	double vencimento;
	double desconto;
	double bonificacao;
	
	double calculaRemuneracao(){
		return  (vencimento+bonificacao)*desconto/100;
		
	}
	
}
