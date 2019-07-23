#include <stdio.h>
#include <stdlib.h>

typedef struct lista_clientes{
	int codigo_cliente;
	char nome[20]  ;
	int      qt_clientes;
} Tipo_Lista_clientes;

const int maximo= 50;
int qa_clientes;
int escolha;
Tipo_Lista_clientes lista[50];


int procura(int pro) { //procurar
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

void mostre(int posicao) { 	//mostrar
printf("\n\nCodigo");
printf("\n%9d %-20s", lista[posicao].codigo_cliente, lista[posicao].nome);

}

void inserir() {		//INSERIR
	int cont;
	int op;
	do{
		printf("Inserir novo Cliente");
		
		if (qa_clientes<maximo){
				printf("Codigo do cliente: ");
				scanf("%d",&lista[qa_clientes].codigo_cliente);
				printf("\nNome do Convidado: "); 
				fflush(stdin);
				gets(lista[qa_clientes].nome);
				printf("\n\nCliente Inserido com Sucesso!!!\n\n");
	}
		else {
				printf("\n\n\aLista está Lotada!!!\n\n");
				break;
			}
			printf("\n\nInserir outro cliente(1-sim/2-nao)? ");
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
				printf("\n\n Codigo Incorreto!!!!!!\n");
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
			printf("\nExcluir este convidado da Lista (1-sim/2-nao)? ");
			scanf("%d",&confirmaRemocao);
	}
		else{ 
			printf("\n\nTalvez o codigo informado esteja incorreto, informar outro\n");
			break;
		}
			printf("\n\nRemover outro(1-sim/2-nao)? ");
			scanf("%d",&cont);
}while (cont == 1);
}

void listar(){		//Listar
	int i;
	 printf("Listagem de clientes");
	 printf ("Codigo do cliente");
	 for(i = 0; i < qa_clientes; i++) 
	 	printf("%2d , %20s ",lista[i].codigo_cliente, lista[i].nome);
	 printf("\n\nDigite qualquer tecla para sair... ");
}

int main(){
qa_clientes =0;
	int escolha;
do { 

	printf("Opcoes:\n\n");
	printf("      1- Inserir novo Convidado\n\n");
	printf("      2- Listagem de Convidados\n\n");
	printf("      3- Consulta convidado por codigo\n\n");
	printf("      4- Remover convidado por codigo\n\n");
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
return 0;
}


	

