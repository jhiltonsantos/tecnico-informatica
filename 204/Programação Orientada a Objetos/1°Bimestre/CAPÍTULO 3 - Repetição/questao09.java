import javax.swing.JOptionPane;

public class questao09 {
	public static void main(String []args){
		int i;
		for( i=1024;i>=1;i=i/2)
			JOptionPane.showMessageDialog(null, i+":"+i*i);
		}
	}

