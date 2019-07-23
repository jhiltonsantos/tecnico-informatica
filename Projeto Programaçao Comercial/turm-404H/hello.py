
def main():
    print ("MEDIA")
    num1 = int(input('n1:'))
    num2 = int(input('n2:'))

    media = calcula_media(num1,num2)
    situacao = ""

    if media>=7.0:
        situacao = 'APROVADO'
    else:
        situacao = 'REPROVADO'

    print ('Media = {}/ {}'.format(media,situacao))

def calcula_media(a, b):
    media = (a+b)/2
    return  media


