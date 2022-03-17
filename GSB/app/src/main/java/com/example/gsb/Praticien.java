package com.example.gsb;

import com.google.gson.annotations.SerializedName;

import java.io.Serializable;

public class Praticien implements Serializable {
    @SerializedName("id")
    private int id;

    @SerializedName("nom")
    private String nom;

    @SerializedName("prenom")
    private String prenom;

    @SerializedName("tel")
    private String tel;

    @SerializedName("mail")
    private String mail;

    @SerializedName("rue")
    private String rue;

    @SerializedName("postalCode")
    private String postalCode;
}
