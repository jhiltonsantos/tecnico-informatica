package usuario.app.calculoimc;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;

public class MainTela1 extends AppCompatActivity {

    EditText editNome;
    EditText editAltura;
    EditText editPeso;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main_tela1);
    //blinding
        editNome = findViewById(R.id.nome);
        editAltura = findViewById(R.id.altura);
        editPeso = findViewById(R.id.peso);
    }

    public void calcularimc(View view) {
        String rNome = editNome.getText().toString();
        String rAltura = editAltura.getText().toString();
        String rPeso = editPeso.getText().toString();

        Intent intent = new Intent(this, MainTela2.class);
        intent.putExtra("pacotenome", rNome);
        intent.putExtra("pacotealtura", rAltura);
        intent.putExtra("pacotepeso", rPeso);

        startActivity(intent);
    }
}
