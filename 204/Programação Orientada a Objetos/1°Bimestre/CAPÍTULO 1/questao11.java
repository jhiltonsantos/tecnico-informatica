package poo;

import javax.swing.JOptionPane;

public class questao11 {
	public static void main(String []args){
		//Lê total de segundos
		int totalSegs = Integer.parseInt(JOptionPane.showInputDialog("Número total em segundos"));
		//Calcula o numero de horas(divisão inteira por 3600)
		//Uma hora tem 3600 segundos
		int horas = totalSegs/3600;
		//Calcula o número de segundos que sobram
		int segs = totalSegs % 3600;
		//Calcula o número de minutos que existem nesse segundos
		int minutos = segs / 60;
		//Calcula o numero de segundos que restam
		int segundos = segs%60;
		JOptionPane.showMessageDialog(null, totalSegs+" segundos correspondem a "+horas+" hora(s) "+ minutos+" minuto(s) e "+segundos+" segundo(s)");
	}
}
