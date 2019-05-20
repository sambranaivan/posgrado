<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use exception;
// use GuzzleHttp\Client;

class mapucheController extends Controller
{
    //

    public function index(){


            //The URL of the resource that is protected by Basic HTTP Authentication.
            $url = "https://10.20.15.80/mapuche/agentes/legajo/4028";



            //Initiate cURL.
            $ch = curl_init($url);

            //Specify the username and password using the CURLOPT_USERPWD option.
            curl_setopt($ch, CURLOPT_USERPWD,"exactas:Exa2019_");
            curl_setopt($ch, CURLOPT_PORT, 7070);
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            //Tell cURL to return the output as a string instead
            //of dumping it to the browser.
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // Skip SSL Verification
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


            //Execute the cURL request.
            $response = curl_exec($ch);

            //Check for errors.
            if(curl_errno($ch)){
            //If an error occured, throw an Exception.
            throw new Exception(curl_error($ch));
            }

            //Print out the response.
            echo $response;
    }



}
