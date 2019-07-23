
public class Gafanhoto extends Pessoa {
			
	private String login;
	private int toAssistindo;
	
	public Gafanhoto(String nome, int idade, String sexo, String login) {
		super(nome, idade, sexo);
		this.login = login;
		this.toAssistindo = 0;
	}
	
	public String toString() {
		return "\nGafanhoto\n" + super.toString() + "\nLogin: "+ login + "\nAssistindo: " + 
				toAssistindo;	
	}
	
	protected String getLogin() {
		return login;
	}
	protected void setLogin(String login) {
		this.login = login;
	}
	protected int getToAssistindo() {
		return toAssistindo;
	}
	protected void setToAssistindo(int toAssistindo) {
		this.toAssistindo = toAssistindo;
	}

}
