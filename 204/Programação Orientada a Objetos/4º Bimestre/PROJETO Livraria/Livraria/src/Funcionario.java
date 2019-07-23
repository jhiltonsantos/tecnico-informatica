abstract class Funcionario {
	
	protected String nome;
	protected double CPF;
	protected int telefone;
	protected int idade;
	protected int codigo_funcionario;
	protected double salario;
	
	//Atributos
	protected int getCodigo_funcionario() {
		return codigo_funcionario;
	}
	protected void setCodigo_funcionario(int codigo_funcionario) {
		this.codigo_funcionario = codigo_funcionario;
	}
	protected double getSalario() {
		return salario;
	}
	protected void setSalario(double salario) {
		this.salario = salario;
	}
	protected String getNome() {
		return nome;
	}
	protected void setNome(String nome) {
		this.nome = nome;
	}
	protected double getCPF() {
		return CPF;
	}
	protected void setCPF(double cPF) {
		CPF = cPF;
	}
	protected int getTelefone() {
		return telefone;
	}
	protected void setTelefone(int telefone) {
		this.telefone = telefone;
	}
	protected int getIdade() {
		return idade;
	}
	protected void setIdade(int idade) {
		this.idade = idade;
	}

	//metodos
	protected double gratificação(){
			return this.salario * 0.00;
	}
	
	protected void Realizar_venda(){
	}	
	
	//Construtor
	public Funcionario (String nome, int idade, double CPF, 
			int telefone, int codigo_func, double salario){
		this.nome = nome;
		this.codigo_funcionario = codigo_func;
		this.CPF = CPF;
		this.idade = idade;
		this.salario = salario;
		this.telefone = telefone;
					
	}
	
	
	
	 
}
