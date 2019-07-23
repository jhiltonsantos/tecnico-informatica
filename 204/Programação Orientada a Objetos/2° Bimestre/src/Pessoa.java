import javax.swing.JOptionPane;

public class Pessoa {

	String nome;
	int sexo;
	int RG;
	int ano_nasc;
	
	void impressao(){
		System.out.println("O nome do Homem é: "+nome);
		System.out.println("O seu RG: " +RG);
		System.out.println("O seu ano de nascimento: "+ano_nasc);
	}
	
	
	int sexo(){
		sexo = Integer.parseInt(JOptionPane.showInputDialog("sexo:(1 - Masculino | 2 - Feminino "));
		return sexo;
		
	}
	
	
			
		}
