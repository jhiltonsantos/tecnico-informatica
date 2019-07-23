
public class questao6 {
	public static void main(String[]args){
		questao5 q1 = new questao5();
		questao5 q2 = new questao5();
		questao5 q3 = new questao5();
		
		q1.lado=2;
		q2.lado=4;
		q3.lado=5;
		
		System.out.println("Area quadrado 1: "+q1.calculaArea());
		System.out.println("Area quadrado 2: "+q2.calculaArea());
		System.out.println("Area quadrado 3: "+q3.calculaArea());
		
		System.out.println("Perimetro do quadrado 1: "+q1.calculaPerimetro());
		System.out.println("Perimetro do quadrado 2: "+q2.calculaPerimetro());
		System.out.println("Perimetro do quadrado 3: "+q3.calculaPerimetro());
		
	}
	
}