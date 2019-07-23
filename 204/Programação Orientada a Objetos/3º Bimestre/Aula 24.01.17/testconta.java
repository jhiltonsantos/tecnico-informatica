
public class testconta {
 public static void main(String[] args) {
	conta c1 = new conta();
	
	c1.setLimite(1000);
	c1.setNome("Hilton");
	c1.setNum(023);
	c1.setSaldo(525);
	
	System.out.println("Nome: " + c1.getNome());
	System.out.println("Numero da conta: "+c1.getNum());
	System.out.println("Saldo da contaq: "+ c1.getSaldo());
	System.out.println("Limite da conta: "+ c1.getLimite());

}
}
