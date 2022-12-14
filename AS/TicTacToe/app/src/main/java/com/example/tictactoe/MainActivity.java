package com.example.tictactoe;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.TextView;
import android.view.View;

public class MainActivity extends AppCompatActivity {

    TextView field1, field2, field3, field4, field5, field6, field7, field8, field9;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        field1 = (TextView) findViewById(R.id.textView0);
        field2 = (TextView) findViewById(R.id.textView1);
        field3 = (TextView) findViewById(R.id.textView2);
        field4 = (TextView) findViewById(R.id.textView3);
        field5 = (TextView) findViewById(R.id.textView4);
        field6 = (TextView) findViewById(R.id.textView5);
        field7 = (TextView) findViewById(R.id.textView6);
        field8 = (TextView) findViewById(R.id.textView7);
        field9 = (TextView) findViewById(R.id.textView8);

        public void sign(View)
        {

        }
    }
}