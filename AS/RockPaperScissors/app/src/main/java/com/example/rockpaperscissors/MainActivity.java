package com.example.rockpaperscissors;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.TextView;
import android.view.View;

import java.lang.reflect.Array;

public class MainActivity extends AppCompatActivity {

    TextView result_dis;
    String result;
    String[] CPU = {"Rock", "Paper", "Scissors"};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        result_dis = (TextView) findViewById(R.id.result);
    }

    public void rock(View view)
    {
        int indexOfCPU = (int)Math.random() * 3;
        String indexOfCPU_str = Integer.toString(indexOfCPU);
        result_dis.setText(indexOfCPU);
        if(CPU[indexOfCPU] == "Rock")
        {
            result_dis.setText("Remis. Spróbuj jeszcze raz");
        }
        else if(CPU[indexOfCPU] == "Scissors")
        {
            result_dis.setText("Brawo wygrałeś. Spróbuj jeszcze raz");
        }
        else
        {
            result_dis.setText("Brawo wygrałeś. Spróbuj jeszcze raz");
        }
    }

}