import javax.swing.JOptionPane;

public class questao08 {
	public static void main(String[]args){
		int digito, soma;
		double num = Double.parseDouble(JOptionPane.showInputDialog("Número maior que zero:"));
		soma=0;
		while(num>0){
			digito = (int)num%10;
			num = num/10;
			soma = soma+digito;
		}
		JOptionPane.showMessageDialog(null, "A soma dos dígitos de "+num+" é "+soma);
	}
}
