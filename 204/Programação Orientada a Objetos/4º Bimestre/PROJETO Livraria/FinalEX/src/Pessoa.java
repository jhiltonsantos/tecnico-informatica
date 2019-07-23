
public abstract class Pessoa {

	protected String nome;
	protected int idade;
	protected String sexo;
	protected float exp;
	

	//Construtor
		public Pessoa (String nome, int idade, String sexo){
			this.nome = nome;
			this.idade = idade;
			this.sexo = sexo;
			this.exp = 0;
		}

	public String toString() {
		return "\nPessoa\n" + "\nNome: "+ nome + "\nidade: " + 
				idade + "\nSexo: " + sexo + "\nExperiencia: "	
				+ exp ;	
	}
		
	protected String getNome() {
		return nome;
	}
	protected void setNome(String nome) {
		this.nome = nome;
	}
	protected int getIdade() {
		return idade;
	}
	protected void setIdade(int idade) {
		this.idade = idade;
	}
	protected String getSexo() {
		return sexo;
	}
	protected void setSexo(String sexo) {
		this.sexo = sexo;
	}
	protected float getExp() {
		return exp;
	}
	protected void setExp(float exp) {
		this.exp = exp;
	}
	
	
}
