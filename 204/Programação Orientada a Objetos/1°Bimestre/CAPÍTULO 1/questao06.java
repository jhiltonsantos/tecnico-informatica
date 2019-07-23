package poo;

import javax.swing.JOptionPane;

public class questao06 {
	public static void main(String[]args){
		double pi = 3.14;
		double raio = Double.parseDouble(JOptionPane.showInputDialog("Introduza o valor do raio"));
		double perimetro = 2*pi*raio;
		
		JOptionPane.showMessageDialog(null,"O perimetro é: "+perimetro);
	}
}
