class Diretor extends Funcionario implements acoesFuncionario{
	
	//Polimorfismo
	protected double gratificação(){
		return salario = salario*0.3;
		
	}
		
	//Constructor
	public Diretor(String nome, int idade, double CPF, int telefone, int codigo_func, double salario) {
		super(nome, idade, CPF, telefone, codigo_func, salario);
	}

	//Funções Interface
		
	@Override
	public void cadastrar_salario() {
		// TODO Auto-generated method stub
		
	}


	@Override
	public void cadastrar_func(String funcionario) {
		// TODO Auto-generated method stub
		
	}	
	

}
