package poo;

import javax.swing.JOptionPane;

public class questao01 {
	public static void main(String[]args){
		String nome = JOptionPane.showInputDialog("Digite o seu nome:");
		JOptionPane.showMessageDialog(null, "Olá, "+nome+" Bem vindo ao Java");
	}
	
}
