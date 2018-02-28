<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transformers\StockBear2Transformer;
use App\StockBear2;

class StockBear2Controller extends Controller
{
	public function index()
	{		
		$down  = StockBear2::all();
		return fractal()
		->collection($down)
		->transformWith(new StockBear2Transformer)
		->toArray();
	}
}
