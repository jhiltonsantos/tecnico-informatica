import javax.swing.JOptionPane;

public class questao04 {
	public static void main(String[]args){
		int factorial;
		int num = Integer.parseInt(JOptionPane.showInputDialog("Qual o número?"));
		if(num>0){
			factorial=1;
		for(int i =num;i>1;i--)
			factorial=factorial*i;
		JOptionPane.showMessageDialog(null, "O factorial de "+num+" é: "+factorial);
		}
		else
			JOptionPane.showMessageDialog(null, "Por favor, digite um número valido positivo");
	}
}
