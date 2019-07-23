import javax.swing.JOptionPane;

public class testaAutomovel {
	public static void main(String []args){
		Automovel automovel1 = new Automovel();
		Automovel automovel2 = new Automovel();
		
		automovel1.modelo=JOptionPane.showInputDialog("Qual o modelo do carro");
		automovel1.cor=JOptionPane.showInputDialog("Qual a cor do carro");
		automovel1.combustivel= Integer.parseInt(JOptionPane.showInputDialog("1- Gasolina|2-Alcool|3-Diesel|4-Gas"));
		
		automovel2.modelo=JOptionPane.showInputDialog("Qual o modelo do carro");
		automovel2.cor=JOptionPane.showInputDialog("Qual a cor do carro");
		automovel2.combustivel= Integer.parseInt(JOptionPane.showInputDialog("1- Gasolina|2-Alcool|3-Diesel|4-Gas"));
		
		


		if(automovel1.preco() > automovel2.preco()){
			System.out.println(	"O modelo do carro é :" +automovel1.modelo_car());
			System.out.println(	"A cor do carro é : " +automovel1.cor_car());
			
			System.out.println(	"Preço do carro é:"+automovel1.preco());
		}
		else{
			System.out.println(	"O modelo do carro é :" +automovel2.modelo_car());
			System.out.println(	"A cor do carro é : " +automovel2.cor_car());
			
			System.out.println(	"Preço do carro é:"+automovel2.preco());
		}
	
	}
}
