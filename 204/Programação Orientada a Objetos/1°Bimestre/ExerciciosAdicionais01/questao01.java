import javax.swing.JOptionPane;

public class questao01 {
	public static void main(String []args){
		int a = Integer.parseInt(JOptionPane.showInputDialog("Digite o primeiro numero"));
		int b = Integer.parseInt(JOptionPane.showInputDialog("Digite o segundo numero"));
		int c = Integer.parseInt(JOptionPane.showInputDialog("Digite o terceiro numero"));
		
		if(((a*a)==(b*b+c*c)||(b*b)==(a*a+c*c)||(c*c)==(a*a+b*b))){
			JOptionPane.showMessageDialog(null, "Triangulo Retangulo");
		}
		else{
			JOptionPane.showMessageDialog(null, "Não Triangulo Retangulo");
		}
		
		double soma = a*a + b*b + c*c;
		double somaquad = (a+b+c)*(a+b+c);
		double media = (a+b+c)/3;
		
		JOptionPane.showMessageDialog(null,"A soma dos seus quadrados é: "+soma);
		JOptionPane.showMessageDialog(null,"O quadrado da sua soma é: "+somaquad);
		JOptionPane.showMessageDialog(null,"Sua média é: "+media);
		
		
		
	}
}
