import javax.swing.JOptionPane;

public class questao11 {
	public static void main(String[]args){
		int m,y;
		int n1 = Integer.parseInt(JOptionPane.showInputDialog("Introduza o primeiro numero:"));
		int n2 = Integer.parseInt(JOptionPane.showInputDialog("Introduza o segundo numero:"));
		m=n1;
		y=0;
		while (y==0){
			if(m%n2==0)
				y=1;
			else
				m=m+n1;
		}
		JOptionPane.showMessageDialog(null, "O MMC entre "+n1+" e "+n2+" é "+m);
	}
}
