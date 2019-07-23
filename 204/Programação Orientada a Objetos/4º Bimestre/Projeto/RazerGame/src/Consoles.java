
class Consoles extends Produto implements acoesProduto{
	
	private String Versao;
	private int Armazenamento;
	
	public float desconto(){
		return (float) 0.85;
	}
	
	
	public String getVersao() {
		return Versao;
	}
	public void setVersao(String versao) {
		Versao = versao;
	}
	public int getTamanho_Arm() {
		return Armazenamento;
	}
	public void setTamanho_Arm(int tamanho_Arm) {
		Armazenamento = tamanho_Arm;
	}
	
	@Override
	public String toString() {
		return "Informações do Produto Escolhido\n" + "\nCodigo do Produto: " + codigo_produto + "\nNome:  " + nome
			+ "\nMarca: " + marca+"\nVersao: "+Versao+"\nArmazenamento: "+Armazenamento+ "\nValor: " + Valor;
	}


	@Override
	public float preco_importacao() {
		float preco;
		if (Valor > 1000){
			preco = Valor + 80;
		}
		else if (Valor > 2000){
			preco = Valor + 120;
		}
		else
			preco = Valor;
		return preco;
	}
	
	
}
