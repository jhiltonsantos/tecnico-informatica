import javax.swing.JOptionPane ;
public class questao01 {
	public static void main(String[]args){
		for(int i=100 ; i<=1000 ; i++){
			if(i % 5 ==0 && i % 3 !=0){
				//System.out.println(i);
				JOptionPane.showMessageDialog(null,i);
								 
			}
				
		}
	}
}
