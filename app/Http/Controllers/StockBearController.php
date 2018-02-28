<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transformers\StockBearTransformer;
use App\StockBear;

class StockBearController extends Controller
{
	public function index()
	{		
		$down  = StockBear::all();
		return fractal()
		->collection($down)
		->transformWith(new StockBearTransformer)
		->toArray();
	}
}
