abstract class Produto {

	protected int codigo_produto;
	protected float Valor;
	protected String nome;
	protected String marca;
		
	abstract float desconto();
	
	public int getCodigo_produto() {
		return codigo_produto;
	}
	public void setCodigo_produto(int Codigo_produto) {
		codigo_produto = Codigo_produto;
	}
	public double getValor() {
		return Valor;
	}
	public void setValor(float valor) {
		Valor = valor;
	}
	public String getNome() {
		return nome;
	}
	public void setNome(String nome) {
		this.nome = nome;
	}
	public String getMarca() {
		return marca;
	}
	public void setMarca(String marca) {
		this.marca = marca;
	}
	
	
	
}
