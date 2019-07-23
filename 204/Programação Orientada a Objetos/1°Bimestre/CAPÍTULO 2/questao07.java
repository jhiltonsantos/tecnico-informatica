import javax.swing.JOptionPane;

public class questao07 {
	public static void main(String[]args){
		int mes = Integer.parseInt(JOptionPane.showInputDialog("Introduza o mês:"));
		String estacao;
		if(mes==12 || mes==1 || mes==2){
			estacao = "Inverno";
		}
		else if (mes==3||mes==4||mes==5){
			estacao = "Primavera";
		}
		else if (mes==6||mes==7||mes==8){
			estacao = "Verão";
		}
		else if (mes==9||mes==10||mes==11){
			estacao = "Outono";
		}
		else{
			estacao = "Mês Invalido!!!";
		}
		JOptionPane.showMessageDialog(null, "O mês "+mes+" está no(a) "+estacao+".");
	}
	
	
}
