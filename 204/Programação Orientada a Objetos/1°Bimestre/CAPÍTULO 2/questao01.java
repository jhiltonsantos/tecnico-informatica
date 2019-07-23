import javax.swing.JOptionPane;

public class questao01 {
	public static void main(String[]args){
	
	int nota = Integer.parseInt(JOptionPane.showInputDialog("Qual a nota?(De 1-5)"));
	
	switch (nota){
		case 1: JOptionPane.showMessageDialog(null, "MAU!!!");
				break;
		case 2: JOptionPane.showMessageDialog(null, "MEDIOCRE!!!");
				break;
		case 3: JOptionPane.showMessageDialog(null, "SUFICIENTE!!!");
				break;
		case 4: JOptionPane.showMessageDialog(null, "BOM!!!");
				break;
		case 5: JOptionPane.showMessageDialog(null, "EXCELENTE!!!");
				break;
		default: JOptionPane.showMessageDialog(null, "Nota Inválida");
		
	}
}
}
