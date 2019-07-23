package poo;

import javax.swing.JOptionPane;

public class questao13 {
	public static void main(String []args){
		int ano = Integer.parseInt(JOptionPane.showInputDialog("Qual o ano?"));
		
		if(((ano % 4 ==0)&& (ano % 100 !=0))||(ano %400 ==0)){
			JOptionPane.showMessageDialog(null,"O ano "+ano+" é bissexo!!");
		}
		else{
			JOptionPane.showMessageDialog(null,"O ano "+ano+" é comum!!");
		}
	}
}
