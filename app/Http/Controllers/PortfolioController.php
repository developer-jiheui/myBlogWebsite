<?php

namespace App\Http\Controllers;

class PortfolioController
{

    public function create(){

        return view('pages.portfolio.create');

    }

    public function edit($portfolio){

        return view('pages.portfolio.edit', compact('portfolio'));

    }
}
