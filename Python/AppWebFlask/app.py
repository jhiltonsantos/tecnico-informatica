from flask import Flask, render_template, request, session, redirect, flash
import sqlite3

app = Flask(__name__)

app.secret_key = '7777'

##Banco de Dados
def conexaoBD():
    conexao = sqlite3.connect('escola.banco')
    return conexao



@app.route('/veiculos')
def Veiculos():
    conexao = conexaoBD()
    cursor = conexao.execute('SELECT * FROM Veiculo')
    carro = cursor.fetchall()
    return render_template('veiculos.html', carros=carro)



@app.route('/novo_veiculo')
def formulario_veiculo():
    return render_template('novo_veiculo.html', carro=[], editando=False)



##INSERIR E EDITAR
@app.route('/salvar_veiculo', methods=['POST'])
def salvar_veiculo():
    editando = bool(request.form['editando'])
    nome = request.form['nome_veiculo']
    ano = request.form['ano_veiculo']
    cor = request.form['cor_do_veiculo']

    ##salvar BD
    conexao = conexaoBD()

    if editando == True:
        conexao.execute('UPDATE Veiculo SET nome=?, anda=?, cor=? WHERE nome=?', [nome, ano, cor, nome])

    else:
        conexao.execute('INSERT INTO Veiculo(nome, anda, cor) VALUES (?, ?, ?)', [nome, ano, cor])

    conexao.commit()

    return redirect('/veiculos')



@app.route('/remover_veiculo/<string:nome>')
def remover_veiculo(nome):
    conexao = conexaoBD()
    conexao.execute('DELETE FROM Veiculo WHERE nome=?',[nome])
    conexao.commit()

    return redirect('/veiculos')

##EDITAR VEICULO

@app.route('/editar_veiculo/<string:nome>')
def editar_veiculo(nome):
    conexao = conexaoBD()
    cursor = conexao.execute('SELECT * FROM Veiculo WHERE nome=?',[nome])
    conexao.commit()
    Veiculo1 = cursor.fetchone()

    return render_template('novo_veiculo.html', carro=Veiculo1, editando=True)












@app.route('/home/<int:numero>')
def index(numero):
    #if 'user' in session:
        dobro = numero*2
        return render_template('index.html', valor=dobro)
    #else:
     #   return 'Verifique seu login antes...'

@app.route('/sobre/<string:autor>')
def sobre(autor):
    return render_template('sobre.html', autor=autor)


@app.route('/quem_somos')
def quem_somos():
    return  render_template('quem_somos.html')

@app.route('/login', methods=['GET','POST'])
def login():

    if request.method == 'GET':
        return render_template('form_login.html')
    elif request.method == 'POST':
        usuario = request.form['usuario']
        senha = request.form['senha']

        if usuario=='Hilton' and senha == '123':
            session['user']=usuario
            flash('Login realizado com sucesso!!!')
            return  redirect('/home/1')
        else:
            return redirect('/login')


@app.route('/logout')
def logout():
    del session['user']
    return redirect('/home/1')


if __name__ == '__main__':
    app.run()