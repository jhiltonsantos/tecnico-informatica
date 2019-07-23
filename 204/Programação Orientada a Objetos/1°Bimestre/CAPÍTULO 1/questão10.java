package poo;

import javax.swing.JOptionPane;

public class questão10 {
	public static void main(String []args){
		int a = Integer.parseInt(JOptionPane.showInputDialog("Introduza o valor de a"));
		int b = Integer.parseInt(JOptionPane.showInputDialog("Introduza o valor de b"));
		int c = Integer.parseInt(JOptionPane.showInputDialog("Introduza o valor de c"));
		double det = b*b - 4*a*c;
		double raiz1, raiz2;
		if(det>=0){
			raiz1 = (-b + Math.sqrt(det))/(2*a);
			raiz2 = (-b - Math.sqrt(det))/(2*a);
			JOptionPane.showMessageDialog(null,"Raiz 1 =" +raiz1);
			JOptionPane.showMessageDialog(null,"Raiz 2 =" +raiz2);
		}
		else{
			JOptionPane.showMessageDialog(null,"A equação nao tem raizes!!!");
		}
	}
	
}
