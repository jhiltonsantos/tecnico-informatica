class Gerente extends Funcionario implements acoesFuncionario{
	
	protected double gratificação(){
		return salario = salario*0.2;
		
	}
	
	//Polimorfismo de Sobreposição - Interface
	
	@Override
	public void cadastrar_salario() {
		// TODO Auto-generated method stub
		
	}

	@Override
	public void cadastrar_func(String funcionario) {
		// TODO Auto-generated method stub
		
	}
	
	//Construtor
		public Gerente(String nome, int idade, double CPF, 
				int telefone, int codigo_func, double salario) {
			super(nome, idade, CPF, telefone, codigo_func, salario);
			
		}

	//toString
	@Override
	public String toString() {
		return "Gerente"+"\nCodigo do Funcionario:" +codigo_funcionario 
				+ "\nNome:" + nome + "\nCPF do Funcionario:" + CPF
				+ "\nTelefone:" + telefone + "\nIdade=" + idade
				+"\nSalario=" + salario;
	}

	
		
}
