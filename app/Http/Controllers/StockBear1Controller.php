<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transformers\StockBear1Transformer;
use App\StockBear1;


class StockBear1Controller extends Controller
{
    public function index()
	{		
		$down  = StockBear1::all();
		return fractal()
		->collection($down)
		->transformWith(new StockBear1Transformer)
		->toArray();
	}

}
