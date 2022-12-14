package com.example.flagquiz;

import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.RadioButton;
import android.widget.Button;
import android.widget.TextView;


public class MainActivity extends AppCompatActivity{

    RadioButton odp1, odp2, odp3, odp4;
    Button sprawdz;
    TextView odpowiedz;
    @Override
    protected void onCreate(Bundle savedInstanceState){
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        // Przypisujemy do pola przycisk Button z rozkładu
        odp1 = (RadioButton) findViewById(R.id.odp1);
        odp2 = (RadioButton) findViewById(R.id.odp2);
        odp3 = (RadioButton) findViewById(R.id.odp3);
        odp4 = (RadioButton) findViewById(R.id.odp4);

        // Przypisujemy do pola przycisk Button z rozkładu
        sprawdz = findViewById(R.id.sprawdz);

        // Przypisujemy do pola tekst widok TextView z rozkładu
        odpowiedz = (TextView) findViewById(R.id.odpowiedz);
    }

    public void Sprawdz(View view){
        if (odp3.isChecked()){
            odpowiedz.setText("Dobrze");
        }
        else odpowiedz.setText("Źle");
    }
}