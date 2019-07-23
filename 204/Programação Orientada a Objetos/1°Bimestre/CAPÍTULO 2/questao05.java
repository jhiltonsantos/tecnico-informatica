import javax.swing.JOptionPane;

public class questao05 {
	public static void main(String []args){
		
		double l1 = Double.parseDouble(JOptionPane.showInputDialog("Introduza o lado 1"));
		double l2 = Double.parseDouble(JOptionPane.showInputDialog("Introduza o lado 2"));
		double l3 = Double.parseDouble(JOptionPane.showInputDialog("Introduza o lado 3"));
		
		if(l1==l2)
			if(l2==l3)
				JOptionPane.showMessageDialog(null, "O Triângulo é Equilátero!!");
			else
				JOptionPane.showMessageDialog(null, "O Triângulo é Isósceles!!");
		else
			if(l1==l3)
				JOptionPane.showMessageDialog(null, "O Triângulo é Isósceles!!");
			else
				if(l2==l3)
					JOptionPane.showMessageDialog(null, "O Triângulo é Isósceles!!");
				else
					JOptionPane.showMessageDialog(null, "O Triângulo é Escaleno!!");
		
	}
}
