import javax.swing.JOptionPane;

public class Operacoes {
	int a,b;
	
	void alteravalores(int n1, int n2){
		a = n1;
		b = n2;
	}
	
	int operacao1(){
		return 2 * a+2*b;
	}
	
	int operacao2(){
		return a*b;
	}
	public static void main (String []args){
		Operacoes obj = new Operacoes();
		obj.alteravalores(10,20);
		JOptionPane.showMessageDialog(null, "O valor da primeira operação é: "+ obj.operacao1());
		JOptionPane.showMessageDialog(null, "O valor da segunda operação é: "+ obj.operacao2());
		
		
		
	}
}
