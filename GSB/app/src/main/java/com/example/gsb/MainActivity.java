package com.example.gsb;

import android.app.Activity;
import android.os.Bundle;
import android.view.View;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

import com.example.gsb.databinding.ActivityMainBinding;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class MainActivity extends AppCompatActivity {

    private ActivityMainBinding binding;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        binding = ActivityMainBinding.inflate(getLayoutInflater());
        View view = binding.getRoot();
        setContentView(view);
        GsbServices service = RetrofitClientInstance.getRetrofitInstance().create(GsbServices.class);
        Call<Token> call = service.getToken(new Visiteur("password", "Francesca31@hotmail.com"));
        call.enqueue(new Callback<Token>() {
            @Override
            public void onResponse(Call<Token> call, Response<Token> response) {
                Token token = response.body();
                //for(Visiteur v : token.getToken()){
                    binding.tvToken.setText(token.getToken());
                    Toast.makeText(MainActivity.this, token.getToken(), Toast.LENGTH_SHORT).show();
                //}
            }

            @Override
            public void onFailure(Call<Token> call, Throwable t) {
                Toast.makeText(MainActivity.this, "Something went wrong...Please try later!", Toast.LENGTH_SHORT).show();
            }
        });

    }
}