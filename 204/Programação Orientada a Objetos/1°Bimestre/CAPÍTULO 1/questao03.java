package poo;

import javax.swing.JOptionPane;

public class questao03 {
	public static void main(String[]args){
		int a = 1;
		int b = 2;
		int c = ++b;
		int d = a++;
		c++;
		JOptionPane.showMessageDialog(null,"A = "+a);
		JOptionPane.showMessageDialog(null,"B = "+b);
		JOptionPane.showMessageDialog(null,"C = "+c);
		JOptionPane.showMessageDialog(null,"D = "+d);
		
		
		
	}
}
