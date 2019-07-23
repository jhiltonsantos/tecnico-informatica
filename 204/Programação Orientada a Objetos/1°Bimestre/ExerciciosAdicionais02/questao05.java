
import javax.swing.JOptionPane;

public class questao05{
  public static void main(String[] args){
    int n = Integer.parseInt(JOptionPane.showInputDialog("Primeiro numero"));
    int m = Integer.parseInt(JOptionPane.showInputDialog("Segundo numero"));
    
    int resto = n%m;

    while(resto!= 0){
      n = m;
      m = resto;
      resto = n%m;
    }
    JOptionPane.showMessageDialog(null, "O MDC é "+m);
  } 
}