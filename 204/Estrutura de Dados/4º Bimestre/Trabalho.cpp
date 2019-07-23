#include<stdio.h>
#include<stdlib.h>
#include<conio.h>

typedef struct aluno{
    char nome[20];
    int matricula;
}alun;
alun al[6];
alun novo;
int ult=0;

void adicionar(alun aluno1){
        al[ult]=aluno1;
        ult ++;
}

void inserir () {
	int continuar;
	do {
		printf("\n Chegada de novo aluno na fila \n");
		printf("\n Numero da Matricula: ");
		scanf("%d",&novo.matricula);
		printf("\n Nome: ");
		fflush(stdin);
		gets(novo.nome);
		adicionar(novo);
		printf("\n Inserir novo aluno (1-S/2-N)? \n");
		scanf("%d",&continuar);
		
	}while (continuar !=2 && ult<6);
}

void consultar() {
	printf("\nConsulta Primeiro Aluno da Fila\n");
	 if (ult != 0) {
		printf("Matricula: %d\n", al[0].matricula);
		printf("Nome: %s\n", al[0].nome);
		printf("-------------------------\n");
	}
	else 
		 printf("\n\nFila vazia!!\n\n");
 	printf("\nTecle Enter Para Voltar Para o Menu\n");
	getche();
}

void remover(){
    int i, confrem, continuar;
do{
    printf("\nRetira primeiro aluno da fila \n");
    if (ult != 0) {
        printf("\n\nMatricula Nome \n");
        printf("%4d %-15s", al[0].matricula, al[0].nome);
        printf("\n\n Confirma Retirada do Aluno (1-S, 2-N)? ");
        scanf("%d",&confrem);
        if (confrem ==1) {
            for (i=0; i<ult; i++)
                al[i] = al[i+1];
                ult--;
                printf("\n\n Aluno Retirado da Fila com Sucesso!\n\n");
        }
        else
            printf("\n\n Remocao do Aluno Cancelada\n\n");
        }
    else
	        printf("\n\nFila vazia!!\n\n");
    printf("\n\nDeseja retirar outro aluno(1-S, 2-N)? ");
    scanf("%d",&continuar);
    }while (continuar ==1);
}

void menu(){
	int escolha;
do {
	printf("\n\nFILA DE ALUNOS!!!\n");
	printf("Opcoes:\n\n");
	printf("      1- Inserir novo Aluno na Fila\n");
	printf("      2- Consulta Primeiro Aluno da Fila\n");
	printf("      3- Remover Primerio Aluno da Fila\n");
	printf("      0- Sair do Programa\n");
	printf("\n      Informe a Opcao desejada: ");
	scanf("%d", &escolha);
		switch(escolha){
			case 1: inserir ();
					break;
			case 2: consultar();
					break;
			case 3: remover();
					break;
			case 0: break;
			default : printf("\nOpcao Invalida! \n\n");
			break;
}
}while (escolha != 0);
}

int main(){
	menu();
	system("PAUSE");
}


