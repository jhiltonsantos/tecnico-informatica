import javax.swing.JOptionPane;

public class questao06 {
	public static void main(String []args){
		int mes = Integer.parseInt(JOptionPane.showInputDialog("Introduza o mês(1-12)"));
		int dmes;
		if(mes>=1 && mes<=12){
			switch (mes){
			case 1:dmes = 31;
					break;
			case 2:dmes = 28;
					break;
			case 3:dmes = 31;
					break;
			case 4:dmes = 30;
					break;
			case 5:dmes = 31;
					break;
			case 6:dmes = 30;
					break;
			case 7:dmes = 31;
					break;
			case 8:dmes = 31;
					break;
			case 9:dmes = 30;
					break;
			case 10:dmes = 31;
					break;
			case 11:dmes = 30;
					break;
			case 12:dmes = 31;
					break;
			default:dmes=0;
			}
			JOptionPane.showMessageDialog(null, "Esse mês tem "+dmes+" dias!!!");
		}
		else
			JOptionPane.showMessageDialog(null, "Mês Invalido!!!");
	}
}
