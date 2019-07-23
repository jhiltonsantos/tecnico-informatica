#include<stdio.h>
#include<stdlib.h>
main(){
	char operacao;
	printf("Digite qual a operacao desejada:(1-ADICAO,2-SUBTRAÇÃO,3-MULTIPLICACAO,4-DIVISAO)");
	scanf("%c",&operacao);
	switch(operacao){
		case '1':{
			float n1,n2;
			printf("Digite o primeiro numero:");
			scanf("%f",&n1);
			printf("Digite o segundo numero:");
			scanf("%f",&n2);
			float r=n1+n2;
			printf("O resultado é:%2.f",r);
			break;
		}
		case '2':{
			float n1,n2;
			printf("Digite o primeiro numero:");
			scanf("%f",&n1);
			printf("Digite o segundo numero:");
			scanf("%f",&n2);
			float r=n1-n2;
			printf("O resultado é:%2.f",r);
			break;
		}
		case '3':{
			float n1,n2;
			printf("Digite o primeiro numero:");
			scanf("%f",&n1);
			printf("Digite o segundo numero:");
			scanf("%f",&n2);
			float r=n1*n2;
			printf("O resultado é:%2.f",r);
			break;
		}
		case '4':{
			float n1,n2;
			printf("Digite o primeiro numero:");
			scanf("%f",&n1);
			printf("Digite o segundo numero:");
			scanf("%f",&n2);
			float r=n1/n2;
			printf("O resultado é:%2.f",r);
			break;
		}
		default:printf("VALOR INVALIDO");
	}
}
