package poo;

import javax.swing.JOptionPane;

public class questao04 {
	public static void main (String[]args){
		int x = 5;
		int produto *= x++ ;
		int quociente /= ++x;
		
		JOptionPane.showMessageDialog(null,"O valor do produto é: "+produto+". E "+x);
		JOptionPane.showMessageDialog(null,"O valor do quociente é: "+quociente+". E "+x);
		
	}
}
