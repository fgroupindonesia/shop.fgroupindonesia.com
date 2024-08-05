<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('homepage');
    }

     public function item(): string
    {
        return view('item');
    }

    public function payment(): string
    {
        return view('payment2');
    }

    public function compro(): string
    {
        return view('company-profile');
    }

    public function ketentuan(): string
    {
        return view('ketentuan-umum');
    }

    public function lokasi(): string
    {
        return view('lokasi-kami');
    }

     public function privacy(): string
    {
        return view('privacy-policy');
    }

}
