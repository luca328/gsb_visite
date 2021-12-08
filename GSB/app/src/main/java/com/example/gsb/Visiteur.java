package com.example.gsb;

import com.google.gson.annotations.SerializedName;

public class Visiteur {
    @SerializedName("id")
    private Integer id;
    @SerializedName("email")
    private String matricule;
    @SerializedName("password")
    private String password;
}
