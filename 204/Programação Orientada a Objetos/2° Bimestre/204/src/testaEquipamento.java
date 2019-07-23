
public class testaEquipamento {
	public static void main (String [ ]args){
		Equipamento x1 = new Equipamento();
		Equipamento x2 = new Equipamento();
		
		x1.ligado=true;
		x2.ligado=false;
		
		x1.inverte();
		x2.inverte();
		
		if (x1.estaLigado(true)){
			System.out.println("Equipamento 1 esta ligado");
		}
		else{
			System.out.println("Equipamento 1 esta desligado");
		}
	
		if (x2.estaLigado(true)){
			System.out.println("Equipamento 1 esta ligado");
		}
		else{
			System.out.println("Equipamento 1 esta desligado");
		}
}
}