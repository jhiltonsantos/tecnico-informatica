import javax.swing.JOptionPane;

public class questao10 {
	public static void main(String[]args){
		int max = Integer.parseInt(JOptionPane.showInputDialog("Qual o valor limite?"));
		for(int i =1;i<max;i++){
			boolean primo =true;
			for(int j=2;j<i;j++)
				if(i%j==0)primo=false;
					if(primo)
						JOptionPane.showMessageDialog(null, i);
		}
	}
}
