<html>
    <head>
    <title>Reset de Senha</title>
	<script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script>
function validarSenha(){
   NovaSenha = document.getElementById('NovaSenha').value;
   CNovaSenha = document.getElementById('CNovaSenha').value;
   if (NovaSenha != CNovaSenha) {
      alert("SENHAS DIFERENTES!\nFAVOR DIGITAR SENHAS IGUAIS");
      break;
   }else{
      document.FormSenha.submit();
   }
}
        </script>
        </head>
    <body>

<div class="container-fluid container_reset">
            <div class="row-fluid">
                <div class="well">
                    <form  method="POST" id="FormSenha" name="FormSenha">
                        <div class="centraliza_reset">
                            <fieldset>
                                <br /><br />
                                <div class="row">
                                <div class="span2"></div>
                                <div class="span3">Nova Senha:</div>
                                <div class="span6"><input type="password" maxlength="10" id="NovaSenha" /></div>
                                </div>
                                <div class="row">
                                <div class="span2"></div>
                                <div class="span3">Confirme a nova Senha:</div>
                                <div class="span6"><input type="password" maxlength="10" id="CNovaSenha" /></div>
                                </div>

                                <button type="reset" class="btn btn-primary pull-left botao_limpar_senha">Limpar</button>
                                <input type="submit" class="btn btn-primary pull-right botao_reset_senha" onClick="validarSenha()"></input>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>