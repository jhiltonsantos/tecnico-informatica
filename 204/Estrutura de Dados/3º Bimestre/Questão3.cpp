#include <stdio.h>
#include <conio.h>

#include <stdlib.h>
typedef struct lista_clientes{
	int codigo_cliente;
	char nome[20]  ;
} Tipo_Lista_clientes;

const int maximo= 5;
int qa_clientes;
Tipo_Lista_clientes lista[5];

int procura(int pro) { //PROCURAR 
			int i; 
			int posicao;
			posicao = -1;
		for(i = 0; i<qa_clientes; i++) {
			if (pro==lista[i].codigo_cliente){
			posicao = i;
			break;
}
}
return posicao; 
}
void mostre(int posicao) { 	//MOSTRE
		printf("\n\n	Codigo: ");
		printf("\n%9d %-20s \n", lista[posicao].codigo_cliente, lista[posicao].nome);

}
void inserir() {		//INSERIR 
	int cont;
	int op;
	do{
		printf("\nInserir novo Cliente");
		
		if (qa_clientes<maximo){
				printf("\nCodigo do cliente: ");
				scanf("%d",&lista[qa_clientes].codigo_cliente);
				printf("\nNome do Cliente: "); 
				fflush(stdin);
				gets(lista[qa_clientes].nome);
				qa_clientes++;
				printf("\n\nCliente Inserido com Sucesso!!!\n\n");
	}
		else {
				printf("\n\n\aLista está Lotada!!!\n\n");
				getche();
				break;
			}
			printf("\n\nInserir outro cliente(1-S/2-N)? ");
			scanf("%d",&op);
}while (op == 1);
}

void consultar() {		//CONSULTAR
	int i, cod, achou, cont;
		do {
				printf("\nConsultar codigo do cliente\n\n");
				printf("\nCodigo do Cliente ");
				scanf("%d",&cod);
				achou = procura(cod);
			if (achou != -1){
				mostre(achou);
			}
				else {
				printf("\n\n Codigo Incorreto!\n");
			}
				printf("\n\nConsultar outro(1-sim/2-nao)? ");
				scanf("%d",&cont);
		} while (cont == 1);
}

void remover(){  	//REMOVER
	int codigoRemover, i, cont, achou, confirmaRemocao;
	do{
			printf("\nRemover Cliente\n\n");
			printf("\nCódigo do Cliente: ");
			scanf("%d",&codigoRemover);
			achou = procura(codigoRemover);
		if (achou != -1){
			procura(achou);
			printf("\nExcluir este Cliente da Lista (1-sim/2-nao)? ");
			scanf("%d",&confirmaRemocao);
			if(confirmaRemocao==1){
				lista[i]=lista[qa_clientes-1];
				qa_clientes--;
				printf("\n Cliente removido !!");
			}
			else{ 
				printf("\n\n Cliente não removido!!\n");
				break;
			}
		}
		else{ 
			printf("\nCliente não encontrado!!");
		}
		printf("\n\nRemover outro(1-sim/2-nao)? ");
		scanf("%d",&cont);
}while (cont == 1);
}

void listar(){		//LISTAR 
	 int i;
	 printf("\nListagem de clientes");
	 printf ("\n\nCodigo do cliente");
	 for(i = 0; i < qa_clientes; i++) 
	 	printf("\n%9d , %-20s\n ",lista[i].codigo_cliente, lista[i].nome);
	 	printf("\n\nPrecione qualquer tecla para sair ");
		getche();
}

void menu(){ // MENU
	qa_clientes =0;
	int escolha;
do { 
	printf("Opcoes:\n\n");
	printf("      1- Inserir novo Cliente\n\n");
	printf("      2- Listagem de Cliente\n\n");
	printf("      3- Consulta Cliente por codigo\n\n");
	printf("      4- Remover Cliente por codigo\n\n");
	printf("      0- Sair do Programa\n");
	printf("\n      Informe a Opcao desejada: ");
	scanf("%d", &escolha);
		switch(escolha){ 
			case 1: inserir();
					break;
			case 2: listar();
					break;
			case 3: consultar();
					break;
			case 4: remover();
					break;
			case 0: break;
			
			default : printf("\n\Opcao Invalida! ");
			break;
}
}while (escolha != 0);
}

int main(){
	menu();
	return 0;
}


	

