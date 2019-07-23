import javax.swing.JOptionPane;

public class questao03{
	public static void main(String args[]){
		int p = Integer.parseInt(JOptionPane.showInputDialog("Preço do artigo:"));
		
		double saldo;
		
		if(p > 10000)
			saldo = p * 0.4;
		else if(p > 5000)
			saldo = p * 0.2;
		else if(p > 2500)
			saldo = p * 0.1;
		else
			saldo = p*0.05;
		JOptionPane.showMessageDialog(null, "Terá um saldo de: "+ saldo );
		JOptionPane.showMessageDialog(null, "Custo final do artigo = "+ (p-saldo));

}
}