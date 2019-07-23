package poo;

import javax.swing.JOptionPane;

public class questao09 {
	public static void main(String []args){
		double cateto1 = Double.parseDouble(JOptionPane.showInputDialog("Introduza a dimensão do Cateto 1"));
		double cateto2 = Double.parseDouble(JOptionPane.showInputDialog("Introduza a dimensão do Cateto 2"));
		double hipo = Math.sqrt(cateto1*cateto1 + cateto2*cateto2);
		JOptionPane.showMessageDialog(null,"Hipotenusa = " +hipo);
		
	}

}
