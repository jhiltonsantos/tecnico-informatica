d={}
def inserir():
    while True:
        matricula = int (input("Digite a matricula"))
        nome = input ("Digite o nome:")
        d[matricula]=nome
        resposta = input("Deseja continuar(S/N):")
        if resposta.upper()== "N":
            break

def imprimir():
    while True:
        find = int(input("Digite a matricula que deseja procurar:"))
        if find in d:
            print("Matricula:", find, "---Nome:",d[find])
        else:
            print("Matricula não encontrada")
        resposta = input("Deseja continuar(S/N)")
        if resposta.upper() == "N":
            break


inserir()
imprimir()
        
            
    
