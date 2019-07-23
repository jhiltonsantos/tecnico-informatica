package poo;

import javax.swing.JOptionPane;

public class questao07 {
	public static void main(String []args){
		double num = Double.parseDouble(JOptionPane.showInputDialog("Introduza n°: "));
		if (num!=0){
		JOptionPane.showMessageDialog(null,"O inverso de "+num+" é: "+1/num);
	}
		else{
			JOptionPane.showMessageDialog(null,"Operação Invalida!!!");
		}
	}
}
