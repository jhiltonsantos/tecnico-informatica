
public class Cliente {
	private String Nome;
	private int Idade;
	private int CPF;
	private int Telefone;
	
	
	public String getNome() {
		return Nome;
	}
	public void setNome(String nome) {
		Nome = nome;
	}
	public int getIdade() {
		return Idade;
	}
	public void setIdade(int idade) {
		Idade = idade;
	}
	public int getCPF() {
		return CPF;
	}
	public void setCPF(int cPF) {
		CPF = cPF;
	}
	public int getTelefone() {
		return Telefone;
	}
	public void setTelefone(int telefone) {
		Telefone = telefone;
	}
	@Override
	public String toString() {
		return "\nNome: " + Nome + "\nIdade: " + Idade + "\nCPF: " + CPF + "\nTelefone: " + Telefone;
	}
	
	
	
}
