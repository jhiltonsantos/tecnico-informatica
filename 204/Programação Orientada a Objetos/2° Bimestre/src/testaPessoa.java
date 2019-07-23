import javax.swing.JOptionPane;

public class testaPessoa {
public static void main(String[]args){
	Pessoa p1 = new Pessoa();
	Pessoa p2 = new Pessoa();
	
	p1.nome = JOptionPane.showInputDialog("Nome da Pessoa: ");
	p1.RG = Integer.parseInt(JOptionPane.showInputDialog("Numero do RG "));
	p1.ano_nasc = Integer.parseInt(JOptionPane.showInputDialog("Ano de nascimento "));
	p1.sexo();
	
	p2.nome = JOptionPane.showInputDialog("Nome da Pessoa: ");
	p2.RG = Integer.parseInt(JOptionPane.showInputDialog("Numero do RG "));
	p2.ano_nasc = Integer.parseInt(JOptionPane.showInputDialog("Ano de nascimento "));
	p2.sexo();
	
	if(p1.ano_nasc<p2.ano_nasc){
		System.out.println("O nome da pessoa mais velha é: "+p1.nome);
	}
	else{
		System.out.println("O nome da pessoa mais velha é: "+p2.nome);
	}
	
	if(p1.sexo==1){
		p1.impressao();
	}
	if(p2.sexo==1){
		p2.impressao();
	}
			
	}}
	


