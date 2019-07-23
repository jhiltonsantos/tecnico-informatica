package poo;

import javax.swing.JOptionPane;

public class questao08 {
	public static void main(String []args){
		int num = Integer.parseInt(JOptionPane.showInputDialog("Introduza o numero: "));
		if(num<0){
			JOptionPane.showMessageDialog(null, "O numero é negativo!!!");
		}
		else if (num>0){
			JOptionPane.showMessageDialog(null,"O numero é positivo!!!");
		}
		else{
			JOptionPane.showMessageDialog(null,"O número é zero");
		}
	}
}
