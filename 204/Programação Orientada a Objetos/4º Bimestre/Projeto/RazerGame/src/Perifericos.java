
class Perifericos extends Produto{
	
	private String Interface;

	

	public float desconto(){
		return (float) 0.9;
	}
	
	
	public String getInterface() {
		return Interface;
	}

	public void setInterface(String interface1) {
		Interface = interface1;
	}

	@Override
	public String toString() {
		return "Informações do Produto Escolhido\n" + "\nCodigo do Produto: " + codigo_produto + "\nNome:  " + nome
				+ "\nMarca: " + marca+"\nInterface: "+ Interface+ "\nValor: " + Valor;
	}

	
	
}
