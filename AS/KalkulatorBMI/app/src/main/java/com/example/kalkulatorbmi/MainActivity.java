package com.example.kalkulatorbmi;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.TextView;
import android.view.View;
import java.text.DecimalFormat;

public class MainActivity extends AppCompatActivity {
    TextView BMInt, BMIVal;
    EditText waga, wzrost;
    RadioButton radioK, radioM;
    Integer wagaInt;
    String wagaStr, wzrostStr;
    Float wzrostInt, wzrostIntM, BMI;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        BMInt = (TextView) findViewById(R.id.textBMI);
        BMIVal = (TextView) findViewById(R.id.textResult);

        waga = (EditText) findViewById(R.id.editWaga);
        wzrost = (EditText) findViewById(R.id.editWzrost);

        radioK = (RadioButton) findViewById(R.id.radioK);
        radioM = (RadioButton) findViewById(R.id.radioM);
    }

    public void licz(View view)
    {
        wagaStr = waga.getText().toString();
        wzrostStr = wzrost.getText().toString();
        if(wagaStr.equals("") && wzrostStr.equals(""))
        {
                BMInt.setText("Wypełnij wszystkie pola");
        }
        else
        {
            wagaInt = Integer.parseInt(wagaStr);
            wzrostInt = Float.parseFloat(wzrostStr);
            wzrostIntM = wzrostInt / 100;

                DecimalFormat f = new DecimalFormat("##.00");
                BMI = wagaInt / (wzrostIntM * wzrostIntM);
                BMInt.setText("Twoje BMI wynosi: " + f.format(BMI));
                if(BMI < 16)
                    BMIVal.setText("wygłodzenie");
                else if(BMI >= 16 && BMI < 17)
                    BMIVal.setText("wychudzenie");
                else if(BMI >= 17 && BMI < 18.5)
                    BMIVal.setText("niedowaga");
                else if(BMI >= 18.5 && BMI < 25)
                    BMIVal.setText("prawidłowa waga");
                else if(BMI >= 25 && BMI < 30)
                    BMIVal.setText("nadwaga");
                else if(BMI >= 30 && BMI < 35)
                    BMIVal.setText("I stopień otyłości");
                else if(BMI >= 35 && BMI < 40)
                    BMIVal.setText("II stopień otyłości");
                else if(BMI <= 40)
                    BMIVal.setText("otyłość skrajną");
        }
    }
}