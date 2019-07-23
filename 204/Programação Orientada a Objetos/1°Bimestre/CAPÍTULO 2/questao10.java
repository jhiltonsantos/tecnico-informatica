import javax.swing.JOptionPane;

public class questao10 {
	public static void  main (String []args){
		int dia = Integer.parseInt(JOptionPane.showInputDialog("Introduza o número do dia da semana:"));
		switch(dia){
		case 1: JOptionPane.showMessageDialog(null,"Dia = Domingo");
		break;
		case 2:	JOptionPane.showMessageDialog(null,"Dia = Segunda-feira");
		break;
		case 3: JOptionPane.showMessageDialog(null,"Dia = Terça-feira");
		break;
		case 4: JOptionPane.showMessageDialog(null,"Dia = Quarta-feira");
		break;
		case 5:	JOptionPane.showMessageDialog(null,"Dia = Quinta-feira");
		break;
		case 6: JOptionPane.showMessageDialog(null,"Dia = Sexta-feira");
		break;
		case 7: JOptionPane.showMessageDialog(null,"Dia = Sábado-feira");
		break;
		default:
			JOptionPane.showMessageDialog(null,"Deve digitar um número entre 1 e 7!! -->Dia Invalido");
		}
}
}
