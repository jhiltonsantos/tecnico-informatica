package poo;

import javax.swing.JOptionPane;

public class questao05 {
	public static void main(String[]args){
		double altura = Double.parseDouble(JOptionPane.showInputDialog("Introduza a altura"));
		double comprimento = Double.parseDouble(JOptionPane.showInputDialog("Introduza o comprimento"));
		double largura = Double.parseDouble(JOptionPane.showInputDialog("Introduza a largura"));
		
		double volume = comprimento*largura*altura;
		JOptionPane.showMessageDialog(null, "O volume da caixa é: "+volume);
	}
}
