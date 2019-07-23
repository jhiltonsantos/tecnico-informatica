package com.example.aluno.capital;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

import java.util.HashMap;
import java.util.Map;

public class MainCapital extends AppCompatActivity {
    EditText editPais;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main_capital);
        //blinding
        editPais = findViewById(R.id.pais); //ID do Edit Text da caixa 'Digite o País'
    }

    public void pesquisa(View view) {
       String pais = editPais.getText().toString();

       // Criar e configurar a Intent
        Intent intent = new Intent(this, MainActivity.class);
        intent.putExtra("pacote", pais);
        // Executar intent
        startActivity(intent);

    }
}
