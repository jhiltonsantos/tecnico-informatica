import javax.swing.JOptionPane;

public class questao02 {
	public static void main(String[]args){
		
		int n1 = Integer.parseInt(JOptionPane.showInputDialog("Primeiro número:"));
		int n2 = Integer.parseInt(JOptionPane.showInputDialog("Segundo número:"));
		
		if(n1%2==0)
			if(n2%2==0)
				JOptionPane.showMessageDialog(null,"Ambos são pares. Resultado:"+(n1+n2));
			else
				JOptionPane.showMessageDialog(null,"Primeiro numero é par, segundo é ímpar. Resultado: "+n2);
		else
			if(n2%2!=0)
				JOptionPane.showMessageDialog(null,"Ambos são impares. Resultado: "+(n1*n2));
			else
				JOptionPane.showMessageDialog(null,"Primeiro numero é ímpar, segundo é par. Resultado: "+n1);
		
		
	}
}
