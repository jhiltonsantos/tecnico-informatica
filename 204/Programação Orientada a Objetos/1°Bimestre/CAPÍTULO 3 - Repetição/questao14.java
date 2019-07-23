import javax.swing.JOptionPane;

public class questao14 {
	public static void main(String[]args){
		int n_linhas, xlinhas, i;
		do{
			n_linhas = Integer.parseInt(JOptionPane.showInputDialog("Número de linhas (1 a 9)"));
			
			if(n_linhas <1 || n_linhas >9)
				JOptionPane.showMessageDialog(null, "Número incorreto");
			
		}while(n_linhas <1 || n_linhas>9);
		
		for(xlinhas = 1; xlinhas <=n_linhas; xlinhas ++){
			for( i =1; i<=n_linhas - xlinhas; i++){
				System.out.println(" ");
			}
			for( i =1; i<=xlinhas; i++){
				System.out.println(i);
			}
			for( i =xlinhas-1; i >= 1; i--){
				System.out.println(i);
	}
			
			System.out.println();			
}
}
}
	
