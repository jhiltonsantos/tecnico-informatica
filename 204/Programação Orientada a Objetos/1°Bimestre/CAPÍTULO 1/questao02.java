package poo;

import javax.swing.JOptionPane;

public class questao02 {
	public static void main(String[]args){
		int i = 5,k,j;
		j= --i;
		k= j++;
		i +=10;
		
		JOptionPane.showMessageDialog(null,"O valor de i é: "+i);
		JOptionPane.showMessageDialog(null,"O valor de j é: "+j);
		JOptionPane.showMessageDialog(null,"O valor de k é: "+k);
	}
}

