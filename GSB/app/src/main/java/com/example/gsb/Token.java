package com.example.gsb;
import com.google.gson.annotations.SerializedName;

public class Token {
    @SerializedName("token")
    private String _token;

    public String getToken() {return _token;}
}
