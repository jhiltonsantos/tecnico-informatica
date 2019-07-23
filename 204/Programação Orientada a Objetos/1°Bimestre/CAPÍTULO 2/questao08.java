import javax.swing.JOptionPane;

public class questao08 {
	public static void main(String[]args){
		int idade = Integer.parseInt(JOptionPane.showInputDialog("Idade:"));
		if(idade<=5)
			JOptionPane.showMessageDialog(null,"Isento de pagamento");
		else
			if(idade<=12)
				JOptionPane.showMessageDialog(null,"Bilhete de criança");
			else
				if(idade<=65)
					JOptionPane.showMessageDialog(null,"Bilhete normal");
				else
					JOptionPane.showMessageDialog(null,"Bilhete de 3° idade");
		
	}
}
