package com.example.gsb;

import com.google.gson.annotations.SerializedName;

import java.io.Serializable;

public class Visiteur implements Serializable {
    @SerializedName("id")
    private Integer id;
    @SerializedName("email")
    private String matricule;
    @SerializedName("password")
    private String password;
    @SerializedName("username")
    private String username;

    public Visiteur(String password, String username)
    {
        this.password = password;
        this.username = username;
    }
}
