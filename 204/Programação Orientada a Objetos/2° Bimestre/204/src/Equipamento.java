
public class Equipamento {
	
	boolean ligado;
	
	boolean liga(){
		if (ligado=true)
			else
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
	
	boolean estaLigado(){
		return ligado;
	}
	
}
