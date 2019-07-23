import javax.swing.JOptionPane;

public class questao07 {
	public static void main(String[]args){
		int num, maior=0,menor=0;
		for(int i=1;i<=10;i++){
			num = Integer.parseInt(JOptionPane.showInputDialog("Introduza o "+i+" número:"));
			if(i == 1){
				maior = num;
				menor = num;
			}
			if(num<menor)
				menor=num;
			if(num>maior)
				maior=num;
		}
		JOptionPane.showMessageDialog(null, "O maior número introduzido foi: "+maior);
		JOptionPane.showMessageDialog(null, "O menor número introduzido foi: "+menor);
	}
}
