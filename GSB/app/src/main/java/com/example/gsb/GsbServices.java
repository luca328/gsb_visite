package com.example.gsb;

import retrofit2.Call;
import retrofit2.http.GET;

public interface GsbServices {
    @GET("visiteurs")
    Call<Visiteurs> getAllVisiteurs();
}