#include <stdio.h>
#include <stdlib.h>
#include <conio.h>
#include <string.h>
typedef struct lista_aluno{
	int mat;
	char nome[20];
	int quan_t;	
}Tipo_lista_aluno;

int *novono;
int *noatual;
const int max = 5;
int quant_aluno;
int escolha;
Tipo_lista_aluno lista[10];
int *inicio, *fim;
int procura(int pro) { 
			int i; 
			int posicao;
			posicao = -1;
		for(i = 0; i<quant_aluno; i++) {
			if (pro==lista[i].mat){
			posicao = i;
			break;
}
}
return posicao; 
}

void mostre(int posicao) { 	
printf("\n\nMatricula");
printf("\n%9d %-20s", lista[posicao].mat, lista[posicao].nome);

}
void inserir(){
	int i, matl, continuar,fim;
	char nomel[20];
	quant_aluno *novono;
	do{
		printf("Inserir novo aluno");
		printf("\n Matricula: ");
		scanf("%d",&matl);
		printf("\n Nome: ");
		fflush(stdin);
		gets(nomel);
		fflush(stdin);
		quant_aluno++;
		novono = (quant_aluno*)malloc(sizeof(quant_aluno));
		novono->mat = matl;
		for (i=0;i<=19;i++){
			novono->nome[i] =nomel[i];
			novono->prox = NULL;
			if (inicio == NULL) {
				inicio = novono;
				fim = novono;
		}
			else {
				fim->prox = novono;
				fim = novono;
		}}
		printf("\n\nInserido com Sucesso!!!!\n");
		printf("\nContinuar inserindo (1-sim/2-nao)? ");
		scanf("%d",&continuar);
		}while (continuar == 1);
	}
	
	
void consultar(){
	int matc, continuar, achou=0;
	do{
		printf("\nConsulta aluno pelo numero de matricula\n\n");
		printf("\nMatricula:" );
		scanf("%d",&matc);
		noatual = inicio;
		while(noatual != NULL) {
			if (noatual->mat == matc) {
				achou = 1;
				printf("\n\nMatricula Nome\n"); 
			
			printf("%9d %-20s\n",noatual->mat, noatual->nome);
			break;
			}
			else
			noatual = noatual->prox;
		}
		if (achou == 0){
			printf("\n\nAluno nao encontrado!!\n");
			}
			printf("\nContinuar consultando (1-sim/2-nao)? ");
			scanf("%d",&continuar);
	}while (continuar == 1);
} 

void listar(){
 noatual = inicio;
 printf("\nListagem de Alunos\n\n");
 if (quant_aluno != 0) {
 	printf("\n\nMatricula Nome\n");
 	while( noatual != NULL) {
 		printf("%9d %-20s\n",noatual->mat, noatual->nome);
 		noatual = noatual->prox;
 		}
 	printf("\n\nQuantidade de Alunos = %d\n",quant_aluno);
 }
 else{
 	printf("\n\n Nao tem nenhum aluno cadastrado");
 }
 printf("\n\n\nTecle enter para voltar para o menu\n");
 getche();
}

void retirar(){
	quan_t *noantrem;
 	int matr, confrem, continuar, achou;
 	do{
 		achou = 0;
 		printf("\nRemove matricula de aluno \n\n");
 		printf("\nMatricula:" );
 		scanf("%d",&matr);
 		noatual = inicio;
		while(noatual != NULL) {
 			if (noatual->mat == matr) {
 				achou = 1;
				printf("\n\nMatricula Nome\n");
 				printf("%9d %-20s\n",noatual->mat, noatual->nome);
 				printf("\n\nDeseja remover o aluno (1-sim, 2-nao)? ");
				scanf("%d",&confrem);
 				if (confrem ==1) {
					if (noatual == inicio)
 						inicio = inicio->prox;
 					else {
 						noantrem->prox=noatual->prox;
 					if (noatual == fim) 
  						fim=noantrem;
 					}
 					quan_t--;
 					free(noatual);
 					printf("\n\nRemovido com sucesso!!!!\n");
 				}				
 				else{
 					printf("\n\nRemocao cancelada\n");
					break;}
 			}
 			else {
				noantrem = noatual;
 				noatual = noatual->prox;
 			}
 		}
 		if (achou == 0){
 			printf("\n\nAluno nao encontrado!!\n");}
 	printf("\n\nDeseja remover outro (1-sim, 2-nao)? ");
 	scanf("%d",&continuar);
 }while (continuar ==1); 
}

void menu(){
	qa_clientes =0;
	int escolha;
	do { 
		printf("Opcoes:\n\n");
		printf("      1- Inserir novo aluno\n\n");
		printf("      2- Listagem de Alunos cadastrados\n\n");
		printf("      3- Consulta aluno por matricula\n\n");
		printf("      4- Remover aluno por matricula\n\n");
		printf("      0- Sair\n");
		printf("\n      Informe a Opcao desejada: ");
		scanf("%d", &escolha);
		switch(escolha){ 
			case 1: inserir();
					break;
			case 2: listar();
					break;
			case 3: consultar();
					break;
			case 4: retirar();
					break;
			case 0: break;
			default : printf("\n\Opcao Invalida! ");
			break;
	}
	}while (escolha != 0);
	
	return 0;
	
}

int main(){

menu();
}


