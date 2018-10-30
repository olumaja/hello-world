<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getContact(){

        $address = "17 Ola Ayeni Street, Ikeja";
        $phone = "09062060092";
        $topic = "Welcome to Segun's Blog";
        $data["topic"] = $topic;
        $data["phone"] = $phone;
        $data["address"] = $address;
;        return view('pages.contact')->withData($data);
    }

    public function getIndex(){

        return view('pages.welcome');

    }

    public function getAbout(){

        $first = "Segun";
        $last = "Maja";
        $full = $first . " " . $last;
        $email = "olumajasegun@gmail.com";
        return view('pages.about')->with("fullname", $full)->withEmail($email);
    }

}