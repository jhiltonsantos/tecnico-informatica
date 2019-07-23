
class Engenheiro extends Funcionario{
	String nome;
	String cpf;
	Double Salario;
	public String getNome() {
		return nome;
	}
	public void setNome(String nome) {
		this.nome = nome;
	}
	public String getCpf() {
		return cpf;
	}
	public void setCpf(String cpf) {
		this.cpf = cpf;
	}
	public Double getSalario() {
		return Salario;
	}
	public void setSalario(Double salario) {
		Salario = salario;
	}
	
	public double getBonificacao() {
		return this.Salario * 0.11;
	}


}
