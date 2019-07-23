#include<stdio.h>
#include<stdlib.h>
main(){
	char sexo;
	printf("Digite seu sexo(F-Feminino,M-Masculino)");
	scanf("%c",&sexo);
	switch (sexo){
		case 'F':{
			printf("SEXO FEMININO");
			break;
		}
		case 'M':{
			printf("SEXO MASCULINO");
			break;
		}
		default:printf("SEXO INVALIDO");
	}
}
