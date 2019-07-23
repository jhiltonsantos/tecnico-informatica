
class Gerente extends Funcionario {
	
	/*Get e Set dos atributos que serão alterados no testGerente*/
	String nome;
	public String getNome() {
		return nome;
	}
	public void setNome(String nome) {
		this.nome = nome;
	}
	
	String cpf;
	public String getCpf() {
		return cpf;
	}
	public void setCpf(String cpf) {
		this.cpf = cpf;
	}
	
	int senha;
	public int getSenha() {
		return senha;
	}
	public void setSenha(int senha) {
		this.senha = senha;
	}
	
	int numeroDeFuncionariosGerenciados;
	public int getNumeroDeFuncionariosGerenciados() {
		return numeroDeFuncionariosGerenciados;
	}
	public void setNumeroDeFuncionariosGerenciados(int numeroDeFuncionariosGerenciados) {
		this.numeroDeFuncionariosGerenciados = numeroDeFuncionariosGerenciados;
	}
	
	double Salario;
	public double getSalario() {
		return Salario;
	}
	public void setSalario(double salario) {
		Salario = salario;
	}
		
	public boolean autentica (int senha){
		if (this.senha==senha){
			System.out.println("Acesso Permitido!!!");
			return true;
		}else{
			System.out.println("Acesso Negado!");
			return false;
		}
	}
	public double getBonificacao() {
		return this.Salario * 0.15;
}

}



