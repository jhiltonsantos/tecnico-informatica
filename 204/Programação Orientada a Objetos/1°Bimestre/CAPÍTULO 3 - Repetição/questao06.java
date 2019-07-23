import javax.swing.JOptionPane;

public class questao06 {
	public static void main(String[]args){
		int num =0;
		do{
			num = Integer.parseInt(JOptionPane.showInputDialog("Introduza o número: "));
			if(num<=1)
				JOptionPane.showMessageDialog(null, "Por favor. Introduza um número maior que 1!");
		}while(num<=1);
		for (int i=1; i<num;i++){
			JOptionPane.showMessageDialog(null,""+i);
		}
	}
}
