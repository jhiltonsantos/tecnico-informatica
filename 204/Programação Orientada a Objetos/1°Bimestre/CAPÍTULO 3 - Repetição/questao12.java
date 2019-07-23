import javax.swing.JOptionPane;

public class questao12 {
	public static void main(String []args){
		int primS ,d, m, a, nd = 0;
		do{
			primS = Integer.parseInt(JOptionPane.showInputDialog("Qual o dia da primeira sexta feira do ano?"));
		}while (primS > 7);
		do{
			a = Integer.parseInt(JOptionPane.showInputDialog("Qual o ano?"));
		}while(a< 1990 || a>2000);
		d=primS;
		for(m=1;m<=12;m++){
			switch(m){
			case 1:
			case 3:
			case 5:
			case 7:
			case 8:
			case 10:
			case 12:
				nd = 31;
				break;
			case 4:
			case 6:
			case 9:
			case 11:
				nd = 30;
				break;
			case 2:
				if(a%4==0)
					nd = 29;
				else
					nd = 28;
			}while(d<=nd){
				if (d==13)
					JOptionPane.showMessageDialog(null, d+"/"+m+"/"+a);
				d+=7;
			}
			d = d -nd;
		}
	}
}
