

import javax.swing.JOptionPane;

public class Banco {
	public static void main(String []args){
		Conta Banco1 = new Conta();
		Banco1.nome= "Tio Patinhas";
		Banco1.numero= 123;
		Banco1.tipo= "Simples";
		Banco1.saldo= Integer.parseInt(JOptionPane.showInputDialog("Digite a Quantidade de Saldo Disponivel: R$"));
		
		
		int menu = Integer.parseInt(JOptionPane.showInputDialog("Menu \nDeseja:\n1-Realizar deposito\n2-Realizar Saque\n3-Mostrar saldo\n4-Mostrar informações do cliente"));
		switch (menu){
		case 1: 
		int quantidade = Integer.parseInt(JOptionPane.showInputDialog("Quanto desejar depositar"));
		Banco1.deposita(quantidade);
		break;
		case 2: 
		int quantidade1 = Integer.parseInt(JOptionPane.showInputDialog("Quanto desejar sacar"));
		Banco1.saca(quantidade1);
		break;
		case 3: 
		Banco1.saldo();	
		break;
		case 4: 
		Banco1.acesso();
		break;
		}
		
		
	}
}
