import javax.swing.JOptionPane;

public class classFinal {
public static void main(String[] args) {
	
	Video v[] = new Video[5];
	v[0] = new Video("Aula 01");
	v[1] = new Video("Aula 02");
	v[2] = new Video("Aula 03");
	v[3] = new Video("Aula 04");
	v[4] = new Video("Aula 05");
	
		
	Gafanhoto g[] = new Gafanhoto[2];
	g[0] = new Gafanhoto("Hilton", 17, "M", "jhilton930");
	g[1] = new Gafanhoto("Maria", 16, "F", "maria16");
	
	Visualizacao vis[] = new Visualizacao[5];
	vis [0] = new Visualizacao(g[0], v[1]); // Hilton assiste Aula 01
	vis [1] = new Visualizacao(g[0], v[2]); // Hilton assiste Aula 02
	vis [2] = new Visualizacao(g[0], v[3]);
	vis [3] = new Visualizacao(g[0], v[5]);
	
	vis [0].avaliar();
	vis [1].avaliar(87);
	vis [2].avaliar(59);
	vis [3].avaliar(95);
	
	JOptionPane.showMessageDialog(null, vis[0].toString());
	JOptionPane.showMessageDialog(null, vis[1].toString());
	JOptionPane.showMessageDialog(null, vis[2].toString());
	JOptionPane.showMessageDialog(null, vis[3].toString());
	
	
	//JOptionPane.showMessageDialog(null, g[0].toString());
	//JOptionPane.showMessageDialog(null, v[0].toString());
	
}
}
