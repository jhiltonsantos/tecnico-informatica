import javax.swing.JOptionPane;

public class questao02 {
 public static void main(String[]args){
	 int soma=0;
	 for (int i=1; i<=10;i++){
		 soma +=i;
	 }
	 JOptionPane.showMessageDialog(null, "Soma= "+soma);
 }
}
