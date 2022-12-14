package com.example.flagi;

import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.Button;
import android.widget.ImageView;
import android.view.View;

import java.util.Random;

public class MainActivity extends AppCompatActivity {

    Button btn;
    ImageView img;
    String text;
    String[] data;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        btn = (Button) findViewById(R.id.btn);
        img = (ImageView) findViewById(R.id.img);
        data = new String[] {"afganistan", "albania", "algieria", "andora", "angola"};
    }

    public void next(View view)
    {
        Random Dice = new Random();
        int n = Dice.nextInt(5);
        text = data[n];
        int res = R.drawable.;
        img.setImageResource(res);

    }
}