
public class Video implements AcoesVideo{
	private String titulo;
	private int avaliacao;
	private int views;
	private int curtidas;
	private boolean reproduzindo;
	
	public Video(String titulo){
		this.titulo = titulo;
		this.avaliacao = 1;
		this.views = 0;
		this.curtidas = 0;
		this.reproduzindo = false;
	}
	
	//Atributos Gatters and Sets
	protected String getTitulo() {
		return titulo;
	}

	protected void setTitulo(String titulo) {
		this.titulo = titulo;
	}

	protected int getAvaliacao() {
		return avaliacao;
	}
	
	//Avaliação realizada na sobrecarga de metodo na Classe Visualizacao
	protected void setAvaliacao(int avaliacao) {
		int nova;
		nova = (int) ((this.avaliacao + avaliacao)/this.views);
		this.avaliacao = nova;
	}

	protected int getViews() {
		return views;
	}

	protected void setViews(int views) {
		this.views = views;
	}

	protected int getCurtidas() {
		return curtidas;
	}

	protected void setCurtidas(int curtidas) {
		this.curtidas = curtidas;
	}

	protected boolean isReproduzindo() {
		return reproduzindo;
	}

	protected void setReproduzindo(boolean reproduzindo) {
		this.reproduzindo = reproduzindo;
	}

	@Override
	public void play() {
		this.reproduzindo = true;
		
	}

	@Override
	public void pause() {
		this.reproduzindo = false;
		
	}

	@Override
	public void like() {
		this.curtidas ++;  
		
	}
	@Override
	public String toString() {
		return "\nVideo\n" + "Titulo: "+ titulo + "\nAvaliação: " + 
				avaliacao + "\nViews: " + views + "\nCurtidas: "	
				+ curtidas + "\nReproduzindo: " + reproduzindo;	
	}
	

	
}
