package com.example.aluno.contador;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;

public class MainContador extends AppCompatActivity {

    EditText incrementar;
    TextView txt_numero;

    int valor = 50;
    int numero = 0;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main_contador);

        //Bindig - Conectar os views do layout
        incrementar = findViewById(R.id.incrementar);
        txt_numero = findViewById(R.id.txt_numero);

        // Inicializar View
        txt_numero.setText(String.valueOf(valor));
    }

    public void aumentar(View view) {
     // Pegar o valor do incremento
        String incremente = incrementar.getText().toString();
        int valorincremento = Integer.valueOf(incremente);

     // Atualizar o valor exibido
        valor = valor + valorincremento;
        txt_numero.setText(String.valueOf(valor));
    }

    public void diminuir(View view) {
        String diminuir = incrementar.getText().toString();
        int diminuir_valor = Integer.valueOf(diminuir);

        valor = valor - diminuir_valor;
        txt_numero.setText(String.valueOf(valor));
    }

    public void resetar(View view) {
        valor = 0;
        txt_numero.setText(String.valueOf(valor));
    }
}
