package usuario.app.calculoimc;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.TextView;

public class MainTela2 extends AppCompatActivity {
    TextView nome_mostrar;
    TextView imc_mostrar;
    TextView classificacao_mostrar;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main_tela2);

        //ip's Tela 2
        nome_mostrar = findViewById(R.id.nomeP);
        imc_mostrar = findViewById(R.id.imc);
        classificacao_mostrar = findViewById(R.id.classificacao);

        //Recebendo Tela 1
        Intent intent = getIntent();
        String pacoteNome = intent.getStringExtra("pacotenome");
        String pacoteAltura = intent.getStringExtra("pacotealtura");
        float altura = Integer.valueOf(pacoteAltura);
        String pacotePeso = intent.getStringExtra("pacotepeso");
        float peso = Integer.valueOf(pacotePeso);

        //Calcular IMC obs:depois resolver problema dos valores
        float calculoimc = (peso)/(altura*altura);
        float valor = calculoimc*10000;
        String resultadoimc = String.valueOf(valor);


        //Classificacao
        String classificacao = null;
        if (valor < 18.5){
            classificacao = "Abaixo do Peso";
        }
        if (valor >= 18.5 && valor <=24.9){
            classificacao = "Peso Normal";
        }
        if (valor >= 25 && valor <= 29.9){
            classificacao = "Sobrepeso";
        }
        if (valor >= 30 && valor <= 34.9){
            classificacao = "Obesidade I";
        }
        if (valor >= 35 && valor <= 39.9){
            classificacao = "Obesidade II";
        }
        if (valor >= 40) {
            classificacao = "Obesidade III";
        }

        nome_mostrar.setText(pacoteNome);
        imc_mostrar.setText(resultadoimc);
        classificacao_mostrar.setText(classificacao);



    }
}
