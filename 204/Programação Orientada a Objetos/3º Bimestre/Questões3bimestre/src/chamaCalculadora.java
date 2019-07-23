import javax.swing.JOptionPane;

public class chamaCalculadora {
	public static void main(String[] args) {
		calculadora Calcula1 = new calculadora();
		
		Calcula1.x = Integer.parseInt(JOptionPane.showInputDialog("Qual o valor de X: "));
		Calcula1.y = Integer.parseInt(JOptionPane.showInputDialog("Qual o valor de Y: "));
		
		int escolha = Integer.parseInt(JOptionPane.showInputDialog("Qual operação você quer realizar (1- Adição/ 2- Substração/ 3- Multiplicação/ 4- Divisão"));
		
		switch (escolha){
		 case 1 : Calcula1.somar();
		 Integer.parseInt(JOptionPane.showInputDialog("A Soma é: "+ Calcula1.somar()));
		 break;
		 case 2 : Calcula1.subtrair();
		 Integer.parseInt(JOptionPane.showInputDialog("A Subtração é: "+ Calcula1.subtrair()));
		 break;
		 case 3 : Calcula1.multiplicar();
		 Integer.parseInt(JOptionPane.showInputDialog("A Multiplicação é: "+ Calcula1.multiplicar()));
		 break;
		 case 4 : Calcula1.dividir();
		 Integer.parseInt(JOptionPane.showInputDialog("A Soma é: "+ Calcula1.dividir()));
		 break;
		}
	}
}
