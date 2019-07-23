package poo;

import javax.swing.JOptionPane;

public class questao12 {
	public static void main(String []args){
		int num = Integer.parseInt(JOptionPane.showInputDialog("Qual o número"));
		if(num%2 == 0){
			JOptionPane.showMessageDialog(null,"O número "+num+" é par!!!" );
		}
		else{
			JOptionPane.showMessageDialog(null,"O número "+num+" é ímpar!!!");
		}
	}
}
