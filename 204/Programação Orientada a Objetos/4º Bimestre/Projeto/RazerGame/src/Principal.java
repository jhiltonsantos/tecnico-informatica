import javax.swing.JOptionPane;
public class Principal {
	public static void main(String[] args) {
		Venda venda = new Venda();
		//JOGOS	
		Jogos jogos1 = new Jogos();
		jogos1.setCodigo_produto(2016025);
		jogos1.setNome("Overwatch");
		jogos1.setPlataforma("PC");
		jogos1.setMarca("Blizzard");
		jogos1.setGenero("MOBA/FPS");
		jogos1.setTipo_midia("Midia Digital");
		jogos1.setValor(160);
		jogos1.setClassificacao(14);
		Jogos jogos2 = new Jogos();
		jogos2.setCodigo_produto(2017009);
		jogos2.setNome("Horizon Zero Dawn");
		jogos2.setPlataforma("PS4");
		jogos2.setMarca("SONY");
		jogos2.setGenero("Aventura");
		jogos2.setTipo_midia("Midia Fisica");
		jogos2.setValor(220);
		jogos2.setClassificacao(12);
		Jogos jogos3 = new Jogos();
		jogos3.setCodigo_produto(2017011);
		jogos3.setNome("The Legend of Zeld - Breth of The Wild");
		jogos3.setPlataforma("Nintendo Switch");
		jogos3.setMarca("Nintendo");
		jogos3.setGenero("Acao e Aventura");
		jogos3.setTipo_midia("Midia Digital");
		jogos3.setValor(200);
		jogos3.setClassificacao(10);
		//CONSOLES
		Consoles consoles1 = new Consoles();
		consoles1.setCodigo_produto(2016023);
		consoles1.setNome("Xbox One");
		consoles1.setTamanho_Arm(500);
		consoles1.setMarca("Microsoft");
		consoles1.setVersao("Slim");
		consoles1.setValor(1800);
		Consoles consoles2 = new Consoles();
		consoles2.setCodigo_produto(2017005);
		consoles2.setNome("Nintendo Switch");
		consoles2.setTamanho_Arm(50);
		consoles2.setMarca("Nintendo");
		consoles2.setVersao("Comum");
		consoles2.setValor(2000);
		Consoles consoles3 = new Consoles();
		consoles3.setCodigo_produto(2016032);
		consoles3.setNome("PlayStation 4");
		consoles3.setTamanho_Arm(1000);
		consoles3.setMarca("SONY");
		consoles3.setVersao("Pro");
		consoles3.setValor(2700);
		//PERIFERICOS
		Perifericos per1 = new Perifericos();
		per1.setCodigo_produto(2015081);
		per1.setNome("Mouse Optical Gamer");
		per1.setMarca("Multilaser");
		per1.setInterface("Wireless");
		per1.setValor(200);
		Perifericos per2 = new Perifericos();
		per2.setCodigo_produto(2017021);
		per2.setNome("Teclado Mecanico Professional");
		per2.setMarca("Multilaser");
		per2.setInterface("USB");
		per2.setValor(800);
		
		//INICIAL
		//CLIENTE
		int confirmar;
		JOptionPane.showMessageDialog(null, "Bem Vindo a Razer Gamer!!!");
		JOptionPane.showMessageDialog(null, "Informações do Cliente");
		Cliente cliente = new Cliente();
		cliente.setNome(JOptionPane.showInputDialog(null, "Nome do Cliente: ", null, JOptionPane.INFORMATION_MESSAGE));//Nome Cliente
		cliente.setIdade(Integer.parseInt(JOptionPane.showInputDialog(null, "Idade do Cliente: ", null, JOptionPane.INFORMATION_MESSAGE)));//Idade Cliente
		cliente.setCPF(Integer.parseInt(JOptionPane.showInputDialog(null, "CPF do Cliente: ", null, JOptionPane.INFORMATION_MESSAGE)));//CPF
		cliente.setTelefone(Integer.parseInt(JOptionPane.showInputDialog(null, "Telefone do Cliente: ", null, JOptionPane.INFORMATION_MESSAGE)));//Telefone Cliente
		confirmar = Integer.parseInt(JOptionPane.showInputDialog(null, "Confirmar Dados Pessoais (1-Sim || 2-Nao)\n"+ cliente.toString(), 
				null, JOptionPane.INFORMATION_MESSAGE));
		if(confirmar == 1){
			JOptionPane.showMessageDialog(null, "Continuar para a Compra");
		}
		else{
			JOptionPane.showMessageDialog(null, "Compra Cancelada Devido a Não Confirmacao do Dados do Cliente",null, JOptionPane.ERROR_MESSAGE);
			System.exit(0);
			
		}
	
		//FORMA DE PAGAMENTO
				int pagamento;
				venda.setForma_pagamento (pagamento = Integer.parseInt(JOptionPane.showInputDialog("Forma de pagamento\n" +
					"\n1 - Boleto*\n2 - Cartao de Credito\n3 - Cartao de Debito\n4 - Carteira Digital"+"\n\n*Pagamento Usando Boleto Tem Desconto Especial!!!")));
				
				switch(pagamento){
					case 1: JOptionPane.showMessageDialog(null, "Pagamento Usando Boleto");
							break;
					case 2:  JOptionPane.showMessageDialog(null, "Pagamento Usando Cartao de Credito");
							break;
					case 3:  JOptionPane.showMessageDialog(null, "Pagamento Usando Cartao de Debito");
							break;
					case 4:  JOptionPane.showMessageDialog(null, "Pagamento Usando Carteira Digital");
							break;
					case 0: System.exit(0); break;
					default :JOptionPane.showMessageDialog(null, "Opcao Invalida");
			}
	
		//ESCOLHA PRODUTO
		int escolha;
		escolha = Integer.parseInt(JOptionPane.showInputDialog("Realizar Compra\n"+"\n1 - (JOGO) "+jogos1.getNome()+": R$"+jogos1.getValor()+
					"\n2 - (JOGO) "+jogos2.getNome()+": R$"+jogos2.getValor()+ "\n3 - (JOGO) "+jogos3.getNome()+": R$"+jogos3.getValor()+
					"\n4 - (CONSOLE) "+consoles1.getNome()+": R$"+consoles1.getValor()+ "\n5 - (CONSOLE) "+consoles2.getNome()+": R$"+consoles2.getValor() + 
					"\n6 - (CONSOLE) "+consoles3.getNome()+": R$"+consoles3.getValor()+ "\n7 - (PERIFERICO) "+per1.getNome()+": R$"+per1.getValor() +"*"+ 
					"\n8 - (PERIFERICO) "+per2.getNome()+": R$"+per2.getValor() + "*"+"\n0 - Finalizar Compra"+"\n\n*Ha Isencao de Impostos na Compra de Perifericos"
					+"\nPerifericos 100% Nacional"));
			
		switch(escolha){
			case 1: JOptionPane.showMessageDialog(null, jogos1.toString());
				if (pagamento == 1){
					venda.valor_venda = jogos1.desconto() * jogos1.preco_importacao();}	//Calculo do Valor da Venda
				else
					venda.valor_venda = jogos1.preco_importacao();
					break;
			case 2:  JOptionPane.showMessageDialog(null, jogos2.toString());
				if (pagamento == 1){
					venda.valor_venda = jogos2.desconto() * jogos2.preco_importacao();}	//Calculo do Valor da Venda
				else
					venda.valor_venda = jogos2.preco_importacao();
					break;
			case 3:  JOptionPane.showMessageDialog(null, jogos3.toString());
				if (pagamento == 1){
					venda.valor_venda = jogos3.desconto() * jogos3.preco_importacao();}	//Calculo do Valor da Venda
				else
					venda.valor_venda = jogos3.preco_importacao();
					break;
			case 4:  JOptionPane.showMessageDialog(null,consoles1.toString());
				if (pagamento == 1){
					venda.valor_venda = consoles1.desconto() * consoles1.preco_importacao();}	//Calculo do Valor da Venda
				else
					venda.valor_venda = consoles1.preco_importacao();
					break;
			case 5:  JOptionPane.showMessageDialog(null,consoles2.toString());
				if (pagamento == 1){
					venda.valor_venda = consoles2.desconto() * consoles2.preco_importacao();}	//Calculo do Valor da Venda
				else
					venda.valor_venda = consoles2.preco_importacao();
					break;
			case 6:  JOptionPane.showMessageDialog(null,consoles3.toString());
				if (pagamento == 1){
					venda.valor_venda = consoles3.desconto() * consoles3.preco_importacao();}	//Calculo do Valor da Venda
				else
					venda.valor_venda = consoles3.preco_importacao();
					break;
			case 7:  JOptionPane.showMessageDialog(null, per1.toString());
				if (pagamento == 1){
					venda.valor_venda = per1.Valor * per1.desconto();}//Calculo do Valor da Venda
				else
					venda.valor_venda = per1.Valor;
					break;
			case 8:  JOptionPane.showMessageDialog(null, per2.toString());
				if (pagamento == 1){
					venda.valor_venda = per2.Valor * per2.desconto();}//Calculo do Valor da Venda
				else
					venda.valor_venda = per2.Valor;
					break;
			case 0: System.exit(0); break;
				default :JOptionPane.showMessageDialog(null, "Opcao Invalida");
			}
		
		
		//FINALIZAR COMPRA
		JOptionPane.showMessageDialog(null, "COMPRA"+"\nTotal da Compra: R$" + venda.valor_venda + "\nRealizada por: " + cliente.getNome());
		JOptionPane.showMessageDialog(null, "Compra Finalizada, Agradecemos Pela Preferencia");
		
}
}













