d={}
while True:
    mat=int(input("Digite a matricula:"))
    nome=input("Digite o nome:")
    nota=float(input("Digite a nota:"))
    d[mat]=[nome,nota]
    resp=input("Deseja continuar (S/N)?")
    if resp.upper()=="N":
        break

#print(d)
#print("Dados: ", d.keys())
#print("Valores: " d.values())


while True:

    find=int(input('Digite a matricula que quer procurar: '))
    
    if find in d:
        print (d[find])
        
    else:
        print("Matricula Não Encontrada")

    resp=input("Deseja continuar (S/N)?")
    if resp.upper()=="N" or resp.upper()=="n":
        break
