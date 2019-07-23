import javax.swing.JOptionPane;

public class questao05 {
	public static void main(String[]args){
		float media;
		int num=0, soma=0,conta=0;
		while(num>=0){
			num = Integer.parseInt(JOptionPane.showInputDialog("Proximo número: "));
			if(num>=0){
				soma +=num;
				conta++;
			}
			media = soma/conta;
			JOptionPane.showMessageDialog(null, "A média dos números é "+media);
		}
	}
}
