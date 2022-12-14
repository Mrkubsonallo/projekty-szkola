package com.example.rubikscube;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.TextView;
import java.util.Random;
import android.view.View;
import android.os.*;

public class MainActivity extends AppCompatActivity {

    TextView textdis;
    String text = "";
    Integer i = 0;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        textdis = (TextView) findViewById(R.id.textXML);

    }

    public void show(View view)
    {
        String names[] = { "L", "L'", "R", "R'", "U", "U'", "D", "D'", "F", "F'", "B", "B'" };
            text = "";
            for (i = 0; i < 20; i++)
            {
                Random Dice = new Random();
                int n = Dice.nextInt(12);
                text = names[n];
                Handler handler = new Handler();
                handler.postDelayed(new Runnable()
                {
                    textdis.setText(text);
                }, 2000);
            }


    }
}