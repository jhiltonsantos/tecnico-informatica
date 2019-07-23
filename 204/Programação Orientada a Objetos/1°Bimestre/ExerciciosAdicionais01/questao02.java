import javax.swing.JOptionPane;

public class questao02 {
	public static void main(String[]args){
		int a = Integer.parseInt(JOptionPane.showInputDialog("Digite o primeiro numero"));
		int b = Integer.parseInt(JOptionPane.showInputDialog("Digite o segundo numero"));
		int c = Integer.parseInt(JOptionPane.showInputDialog("Digite o terceiro numero"));
		
		if(a>b){
			if(a>c)
				JOptionPane.showMessageDialog(null,"Primeiro numero é maior");
		}
		if(b>a){
			if(b>c)
				JOptionPane.showMessageDialog(null,"Segundo numero é maior");
		}
		if(c>b){
			if(c>a)
				JOptionPane.showMessageDialog(null,"Terceiro numero é maior");
		}
		else{
			JOptionPane.showMessageDialog(null,"Numeros iguais");
			}
	
		
	
		if(a<b){
		if(a<c)
			JOptionPane.showMessageDialog(null,"Primeiro numero é menor");
		}
		if(b<a){
		if(b<c)
			JOptionPane.showMessageDialog(null,"Segundo numero é menor");
		}
		if(c<b){
		if(c<a)
			JOptionPane.showMessageDialog(null,"Terceiro numero é menor");
		}
		
		
	
}
}
