import java.io.IOException;

import javax.swing.JOptionPane;

public class questao09 {
	public static void main(String[]args) throws IOException{
		char c;
		JOptionPane.showInputDialog("Introduza a letra:");
		c = (char) System.in.read();
		switch(c){
		case 'a':
		case 'e':
		case 'i':
		case 'o':
		case 'u':
			JOptionPane.showMessageDialog(null,"A letra "+c+ " é uma vogal");
				break;
		default:
			JOptionPane.showMessageDialog(null,"A letra "+c+" é uma consoante");
		}
	}
}
