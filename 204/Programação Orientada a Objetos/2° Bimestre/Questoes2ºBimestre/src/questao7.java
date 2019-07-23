public class questao7 {
boolean ligado;
	
	boolean liga(){
		if (ligado=true)
				System.out.println("Equipamento ligado!!");
		return ligado=true;
	}
	
	boolean desliga(){
		if (ligado = false)
			System.out.println("Equipamento desligado!!");
				
			return ligado=false;
	}
	
	boolean inverte(){
		if (ligado=true){
			ligado=false;
		}
		else{
			ligado=true;
		}
		return ligado;
	}
	
	boolean estaLigado(boolean b){
		return ligado;
	}
	
}
