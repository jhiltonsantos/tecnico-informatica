#include <stdio.h>
#include <stdlib.h>
main(){
	float n1,n2,f,mf;
	printf("Digite a primeira nota:");
	scanf("%f",&n1);
	printf("Digite a segunda nota:");
	scanf("%f",&n2);
	float m=(n1+n2)/2;
	if (m>=7){
		printf("APROVADO",m);}
	 else if(m<7){
		if (m<4){
			printf("REPROVADO");
		}
	else{
			printf("Aluno deve fazer PRova Final \n");
			printf("Digite a prova final");
			scanf("%f",&f);
			mf=(m+f)/2;
			if (f>=6){
				printf("APROVADO");
			}
			else{
				printf("REPROVADO");
			}
		}
	}	
	
	
}
