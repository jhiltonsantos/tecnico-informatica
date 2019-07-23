d = {}

while True:
    while True:
        mat = int(input("Digite a Matrícula: "))

        if(mat in d):
            print("\n\nMatrícula já inserida, tente outra!!!\n\n")
            pass
        else:
            break
        
    nome = input("Digite o Nome: ")
    nota = float(input("Digite a Nota: "))

    d[mat] = [nome, nota]

    resp = int(input("\nDeseja continuar 1-S, 2-N? "))

    if(resp == 2):
        break

buscar = int(input("\n\nDigite a matrícula desejada: "))

if(buscar in d):
    print("\nDados: ", d[buscar])
    pass
else:
    print("\n\nMatrícua inexistente!!!")
