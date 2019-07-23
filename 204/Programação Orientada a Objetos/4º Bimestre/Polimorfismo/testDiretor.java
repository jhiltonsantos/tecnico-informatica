
class testDiretor {
	public static void main(String[] args) {
		Diretor diretor1 = new Diretor();
		
		diretor1.setCpf("258.324.654-64");
		diretor1.setNome("Antonio");
		diretor1.setSalario(4000.0);
		System.out.println("DIRETORES");
		System.out.println("Nome do Diretor: "+diretor1.getNome());
		System.out.println("Numero do CPF do Diretor: "+diretor1.getCpf());
		System.out.println("Salario do Diretor: "+diretor1.getSalario());
		System.out.println("Bonificação do Diretor: " + diretor1.getBonificacao());
	}

}
