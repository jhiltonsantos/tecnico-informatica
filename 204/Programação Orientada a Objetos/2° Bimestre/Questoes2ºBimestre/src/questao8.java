
public class questao8 {
	public static void main (String [ ]args){
		questao7 x1 = new questao7();
		questao7 x2 = new questao7();
		
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
	
		if (x2.estaLigado(false)){
			System.out.println("Equipamento 1 esta ligado");
		}
		else{
			System.out.println("Equipamento 1 esta desligado");
		}
}
}

