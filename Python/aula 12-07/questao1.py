d={}
def inserir():
    
    while True:
        matricula=int(input("Matricula:"))
        nome = input("Nome:")

        d[matricula]=[nome]
    
        resposta=input("Deseja continuar(S/N)")

        if resposta.upper()=="N":
            break


def buscar():
    while True:
        find=int(input("Digite a matricula que quer procurar:"))

        if find in d:
            print ("\nMatricula", find, "\nNome: ", d[find])

        else:
            print("Matricula não existe!")

        resposta2=input("Deseja continuar (S/N)")
        if resposta2.upper()=="N":
            break
    

inserir()
buscar()
