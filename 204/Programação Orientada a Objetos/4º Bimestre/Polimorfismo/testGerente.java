
class testGerente {
public static void main(String[] args) {
	Gerente gerente = new Gerente();
	
	gerente.setNome("JOsé Hilton da Silva Santos");
	gerente.setNumeroDeFuncionariosGerenciados(0001);
	gerente.setCpf("568.245.598.72");
	gerente.setSalario(5000.0);
	System.out.println("GERENTE");
	System.out.println("Numero do Gerente: " +gerente.getNumeroDeFuncionariosGerenciados());
	System.out.println("Nome do Gerente: "+gerente.getNome());
	System.out.println("Numero do CPF do Gerente: "+gerente.getCpf());
	System.out.println("Salario do Gerente: "+gerente.getSalario());
	System.out.println("Bonificação do Gerente: " + gerente.getBonificacao());
	

}
}