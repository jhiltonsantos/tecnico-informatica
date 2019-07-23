import javax.swing.JOptionPane;

public class testeCalculadora {
	public static void main(String []args){
		calculadora c1 = new calculadora();
		
		c1.x = Integer.parseInt(JOptionPane.showInputDialog("Valor do primeiro numero: "));
		c1.y = Integer.parseInt(JOptionPane.showInputDialog("Valor segundo numero: "));
		
		c1.somar();
		JOptionPane.showMessageDialog(null, c1.somar());
		c1.subtrair();
		JOptionPane.showMessageDialog(null, c1.subtrair());
		c1.multiplicar();
		JOptionPane.showMessageDialog(null, c1.multiplicar());
		c1.dividir();
		JOptionPane.showMessageDialog(null, c1.dividir());
		
		
 }
}
