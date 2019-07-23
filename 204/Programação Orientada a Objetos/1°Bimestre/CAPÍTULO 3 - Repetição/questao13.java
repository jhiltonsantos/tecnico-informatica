import javax.swing.JOptionPane;

public class questao13 {
	public static void main(String[]args){
		int n = Integer.parseInt(JOptionPane.showInputDialog("Introduza o número:"));
		JOptionPane.showMessageDialog(null, "Os divisores de "+n+" são");
		for(int i = 1;i<=n;i++)
			if(n%i==0)
				JOptionPane.showMessageDialog(null, ""+i);
	}
}
