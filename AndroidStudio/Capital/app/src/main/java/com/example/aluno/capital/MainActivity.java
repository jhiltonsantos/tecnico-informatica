package com.example.aluno.capital;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;

import java.util.HashMap;
import java.util.Map;

public class MainActivity extends AppCompatActivity {
    TextView nomeCapital;
    Map<String,String> paises = new HashMap<>();
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
       //binding
       nomeCapital = findViewById(R.id.nome_capital);

        paises.put("Japão","Tóquio");
        paises.put("Peru","Lima");
        paises.put("Brasil","Brasília");
        paises.put("Monte Carlo","Mônaco");
        paises.put("México","Cidade do México");
        paises.put("França","Paris");
        paises.put("Egito","Cairo");
        paises.put("Inglaterra","Londres");
        paises.put("Portugal","Lisboa");



        Intent intent = getIntent();
        String pacote = intent.getStringExtra("pacote");
        String capital = paises.get(pacote);
            if(capital==null){
                capital="NECTD";
             }

        nomeCapital.setText(capital);

    }

    public void fechar(View view) {
        finish();
    }
}
