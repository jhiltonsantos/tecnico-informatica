import javax.swing.JOptionPane;

public class questao03 {
	public static void main(String[]args){
		double aleat = Math.random()*10;
		int num = (int) aleat;
		
		if(num %2 ==0)
			JOptionPane.showMessageDialog(null, "Saiu um n° par: " +num);
		else
			JOptionPane.showMessageDialog(null, "Saiu um n° impar: " +num);
		
 }
}
