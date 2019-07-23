import javax.swing.JOptionPane;
public class Conta {
	
	int numero;
	String nome;
	String tipo;
	int saldo;
	
	void acesso(){
		System.out.println("Nome do Cliente: \n"+nome+"\n");
		System.out.println("Numero da Conta:\n"+numero+"\n");
		System.out.println("Tipo da Conta: \n"+tipo+"\n");
	}
	
	void deposita(int quantidade){
		this.saldo=this.saldo+quantidade;
		System.out.println("Quantidade depositada: R$"+quantidade);
		System.out.println("Saldo atual: R$"+saldo);
	}
		
	void saca(int quantidade) {
		if (quantidade>saldo){
			JOptionPane.showInputDialog("Impossivel de sacar a quantia");
		}
		else{
		this.saldo = this.saldo - quantidade; 
		System.out.println("Quantidade sacada: R$"+quantidade);
		System.out.println("Saldo atual: R$"+saldo);
	  
		}
	
	
	
	}
	int saldo(){
		System.out.println("A Quantidade de Saldo Disponivel é de: R$" +saldo);
		return saldo;
	}
	
}


