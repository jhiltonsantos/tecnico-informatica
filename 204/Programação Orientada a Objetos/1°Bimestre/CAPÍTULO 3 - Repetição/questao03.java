import javax.swing.JOptionPane;

public class questao03 {
 public static void main(String[]args){
	 int lado = Integer.parseInt(JOptionPane.showInputDialog("Qual a dimensão do quadrado?"));
	 if(lado>0){
		 for (int i=1;i<=lado;i++){
			 for(int j=1;j<=lado;j++)
				 JOptionPane.showMessageDialog(null,"*");
			 	System.out.println();
		 }
 }else
	 JOptionPane.showMessageDialog(null, "Por favor, introduza um valor positivo!");
 
	 
	}
}

