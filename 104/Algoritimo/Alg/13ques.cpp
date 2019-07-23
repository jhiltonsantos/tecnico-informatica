#include <stdio.h>
#include <stdlib.h>
main(){
	char letra;
	printf("Digite a letra segundo a opição (M-matutino,V-vespertino,N-noturno)");
	scanf("%c",&letra);
	switch (letra){
		case 'M':{
			printf("BOM DIA");
			break;
		}
		case 'V':{
			printf("BOA TARDE");
			break;
		}
		case 'N':{
			printf("BOA NOITE");
			break;
		}
		default:printf ("TURNO INVALIDO");
	}
	
}
