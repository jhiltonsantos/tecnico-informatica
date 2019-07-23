
public class Visualizacao {
	//Esta classe tem duas agragações
	
	private Gafanhoto espectador;
	private Video filme;
	
	public Visualizacao(Gafanhoto espectador, Video filme) {
		super();
		this.espectador = espectador;
		this.filme = filme;
		this.espectador.setToAssistindo(this.espectador.getToAssistindo() + 1);
		this.filme.setViews(this.filme.getViews() + 1);
	}
	
	//Sobrecarga de Metodos
	public void avaliar(){
		this.filme.setAvaliacao(5);
	}
	
	public void avaliar(int nota){
		this.filme.setAvaliacao(nota);
		
	}
	
	public void avaliar(float porcentagem){
		int tot=0;
		
		if(porcentagem <=20){
			tot=3;
		}	
		else if(porcentagem <=50){
			tot =5;
		}
		else if(porcentagem <=90){
			tot =8;
		}
		else {
			tot = 10;
		}
		this.filme.setAvaliacao(tot);
		
	}
	
	
	 
	protected Gafanhoto getEspectador() {
		return espectador;
	}

	protected void setEspectador(Gafanhoto espectador) {
		this.espectador = espectador;
	}

	protected Video getFilme() {
		return filme;
	}

	protected void setFilme(Video filme) {
		this.filme = filme;
	}

	@Override
	public String toString() {
		return "\nVisualizacao" + "\nEspectador: " + espectador + "\nFilme: " + filme;
	}
	
	
	
	
}
