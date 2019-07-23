import javax.swing.JOptionPane;
		public class questao06 {
		    public static void main(String args[]) {
		    	int i;
		    	int j;
		    	int n = Integer.parseInt(JOptionPane.showInputDialog("Qual o tamanho do losango"));
		    	for(i=n; i>=1; i--){
		    		for(j=1; j<i; j++){
		    			System.out.print("  ");
		    		}
		    		System.out.print("*");
		    		for(j=-i-1; j>=i-n*2; j--){
		    			System.out.print("  ");
		    		}
		    		if(j==-i-1){
		    			System.out.println("  ");
		    		}
		    		else
		    		System.out.println("*");
		    	}
		    	for(i=1; i<=n-1; i++){
		    		System.out.print("  ");
		    		for(j=1; j<i; j++){
		    			System.out.print("  ");
		    		}
		    		System.out.print("*");
		    		for(j=-i*3; j>=-i-n*1-2; j--){
		    			System.out.print("  ");
		    		}
		    		if(j==-i*3){
		    		System.out.println("  ");
		    		}
		    		else
		    		System.out.println("*");
		    	}
		    }
		}
	


