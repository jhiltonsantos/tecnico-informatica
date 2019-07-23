
public class Pedido {
	int codigo_pedido;
	int data_pedido;
	int quantidade;
	float valor_total;
		
	protected int getCodigo_pedido() {
		return codigo_pedido;
	}
	protected void setCodigo_pedido(int codigo_pedido) {
		this.codigo_pedido = codigo_pedido;
	}

	protected int getData_pedido() {
		return data_pedido;
	}
	protected void setData_pedido(int data_pedido) {
		this.data_pedido = data_pedido;
	}

	protected int getQuantidade() {
		return quantidade;
	}
	protected void setQuantidade(int quantidade) {
		this.quantidade = quantidade;
	}

	protected float getValor_total() {
		return valor_total;
	}
	protected void setValor_total(float valor_total) {
		this.valor_total = valor_total;
	}


	void pedido(){
		
	}
}
