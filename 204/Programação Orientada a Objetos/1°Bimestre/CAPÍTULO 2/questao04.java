import javax.swing.JOptionPane;

public class questao04 {
	public static void main(String[]args){
		int soma=0,max=0,min=0;
		int n = Integer.parseInt(JOptionPane.showInputDialog("Quantos valores são?"));
		for (int i=1; i<=n;i++){
			int x = Integer.parseInt(JOptionPane.showInputDialog(i+"°:"));
			soma +=x;
			if(i==1 || x>max)
				max = x;
			if(i==1 || x<min)
				min = x;
		}
		if (n>0){
			JOptionPane.showMessageDialog(null, "Máximo: " +max );
			JOptionPane.showMessageDialog(null, "Mínimo: " +min);
			JOptionPane.showMessageDialog(null, "Soma: " +soma);
			JOptionPane.showMessageDialog(null, "Média: " +soma/n);
		}
	}
}
