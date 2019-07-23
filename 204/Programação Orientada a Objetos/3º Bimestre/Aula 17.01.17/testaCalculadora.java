package aula1701;


import javax.swing.JOptionPane;

public class testaCalculadora {
	public static void main(String[] args) {
		double x=Double.parseDouble(JOptionPane.showInputDialog("Digite o valor do primeiro número: "));
		double y=Double.parseDouble(JOptionPane.showInputDialog("Digite o valor do primeiro número: "));
		calculadora Calc1 = new calculadora(x,y);
		System.out.println(Calc1.soma());
		System.out.println(Calc1.subtrair());
		System.out.println(Calc1.multiplicar());
		System.out.println(Calc1.dividir());
		
	}
}
