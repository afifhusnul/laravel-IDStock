<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transformers\StockBear3Transformer;
use App\StockBear3;

class StockBear3Controller extends Controller
{
    	public function index()
	{		
		$down  = StockBear3::all();
		return fractal()
		->collection($down)
		->transformWith(new StockBear3Transformer)
		->toArray();
	}
}
