
public class programaclass {
	public static void main(String[]args){
		conta conta1 = new conta();
		conta conta2 = new conta();
		
		/*if(conta1==conta2){
			System.out.println("São Iguais");
		}
		else{ 
			System.out.println("Não são iguais");
		}*/
		
		//CONTA 1
		conta1.numero=001;
		conta1.nome="ritazilton";
		conta1.saldo=1000;
		conta1.limite=10000;
		conta1.sacar(20);
		conta1.deposita(100);
		conta1.saldo1();
		//CONTA 2
		conta2.numero=002;
		conta2.nome= "Qualquer";
		conta2.limite = 1800;
		conta2.saldo= 300;
		conta2.sacar(100);
		conta2.deposita(500);
		conta2.saldo1();
	
		
	//CONTA 1	
	System.out.println("CONTA 1");
	System.out.println("Número da conta: "+conta1.numero);
	System.out.println("Nome do cliente: "+conta1.nome);
	System.out.println("Saldo da conta: "+conta1.saldo);
	System.out.println("Limite da conta: "+conta1.limite);
	System.out.println("Valor do Saldo: " +conta1.saldo1());
	
	//CONTA 2
	System.out.println("\nCONTA 2");
	System.out.println("Número da conta: "+conta2.numero);
	System.out.println("Nome do cliente: "+conta2.nome);
	System.out.println("Saldo da conta: "+conta2.saldo);
	System.out.println("Limite da conta: "+conta2.limite);
	System.out.println("Valor do Saldo: " +conta2.saldo1());
	}
}
