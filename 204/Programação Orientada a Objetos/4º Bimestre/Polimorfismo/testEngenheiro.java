
class testEngenheiro {
public static void main(String[] args) {
	Engenheiro engenheiro = new Engenheiro();
	
	engenheiro.setCpf("258.324.654-64");
	engenheiro.setNome("Antonio");
	engenheiro.setSalario(4000.0);
	System.out.println("ENGENHEIROS");
	System.out.println("Nome do Engenheiro: "+engenheiro.getNome());
	System.out.println("Numero do CPF do Engenheiro: "+engenheiro.getCpf());
	System.out.println("Salario do Engenheiro: "+engenheiro.getSalario());
	System.out.println("Bonificação do Engenheiro: " + engenheiro.getBonificacao());
}
}

