import java.io.IOException;

import javax.swing.JOptionPane;

public class questao11 {
	public static void main(String[]args) throws IOException{
		int resultado=0;
		int num1 = Integer.parseInt(JOptionPane.showInputDialog("Primeiro operando:"));
		int num2 = Integer.parseInt(JOptionPane.showInputDialog("Segundo operando:"));
		char op;
		System.out.println("Operador:");
		
		op = (char)System.in.read();
		switch (op){
		case '+':resultado=num1+num2;
		break;
		case '-':resultado=num1-num2;
		break;
		case '*':resultado=num1*num2;
		break;
		case '/':
			if(num2!=0){
				resultado = num1/num2;}
			break;
		}
		if(op!= '/'||num2!=0){
			System.out.println(num1+op+num2+"="+resultado);
			}
		else{
			System.out.println("Divisão por zero!!");
		}
	}
}
