import javax.swing.JOptionPane;

public class questao02 {
	public static void main(String[]args) {
		int  resto;
		int numero = Integer.parseInt(JOptionPane.showInputDialog("Insira o numero"));
		int soma=0;
		
		while (numero>0){
			resto=numero%10;
			numero=(numero-resto)/10;
			soma=soma+resto;
        }
	
		JOptionPane.showMessageDialog(null,"O somatório é: "+soma);
	
	}
	
		
}


