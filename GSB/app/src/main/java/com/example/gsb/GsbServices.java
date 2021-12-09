package com.example.gsb;

import retrofit2.Call;
import retrofit2.http.Body;
import retrofit2.http.GET;
import retrofit2.http.Header;
import retrofit2.http.POST;

public interface GsbServices {

    @GET("visiteurs")
    Call<Visiteur> getAllVisiteur(@Header("Authorization") String authorization);
    @POST("visiteurs")
    Call<Visiteurs> createVisiteur(@Body Visiteur visiteur);
    @POST("login_check")
    Call<Token> getToken(@Body Visiteur visiteur);
}