
class Jogos extends Produto implements acoesProduto {
	
	private String Tipo_midia;
	private String Plataforma;
	private String Genero;
	private int Classificacao;
	
	public float desconto(){
		return (float) 0.95;
	}
	
	public String getTipo_midia() {
		return Tipo_midia;
	}
	public void setTipo_midia(String tipo_midia) {
		Tipo_midia = tipo_midia;
	}
	public String getPlataforma() {
		return Plataforma;
	}
	public void setPlataforma(String plataforma) {
		Plataforma = plataforma;
	}
	public String getGenero() {
		return Genero;
	}
	public void setGenero(String genero) {
		Genero = genero;
	}
	public int getClassificacao() {
		return Classificacao;
	}
	public void setClassificacao(int classificacao) {
		Classificacao = classificacao;
	}
	
	@Override
	public String toString() {
		return "Informações do Produto Escolhido\n" + "\nCodigo do Produto: " + codigo_produto + "\nNome:  " + nome + "\nGenero: " + Genero
				+ "\nClassificacao: " + Classificacao + "\nTipo_midia: " + Tipo_midia + "\nPlataforma: " + Plataforma + "\nMarca: " + marca
				+ "\nValor: " + Valor;
	}

	@Override
	public float preco_importacao() {
		float preco; 
		if (Valor > 100){
			preco = Valor + 20;
		}
		else if (Valor > 200){
			preco = Valor + 35;
		}
		else
			preco = Valor;
		return preco;
	}
	
	
	
}
