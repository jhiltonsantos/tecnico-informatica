class Vendedor extends Funcionario {
	

	//Polimorfismo
	protected double gratificação(){
		return salario = salario *0.1;
	}

	
	//Construtor
	public Vendedor(String nome, int idade, double CPF, int telefone, 
			int codigo_func, double salario) {
		super(nome, idade, CPF, telefone, codigo_func, salario);
	}


	@Override
	public String toString() {
		return "Vendedor"+"\nCodigo do Funcionario:" +codigo_funcionario 
		+ "\nNome:" + nome + "\nCPF do Funcionario:" + CPF
		+ "\nTelefone:" + telefone + "\nIdade=" + idade
		+"\nSalario=" + salario;
}

	
}
