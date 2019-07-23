
public class testaFuncionario {
	public static void main(String[]args){
		Funcionario f1 = new Funcionario();
		
		f1.id=100;
		f1.nome= "Hilton";
		f1.desconto=150;
		f1.vencimento=07;
		f1.bonificacao=1000;
		
		System.out.println("A remuneração será de: "+f1.calculaRemuneracao());
	}
}
