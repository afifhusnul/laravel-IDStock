<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transformers\StockRevUpTransformer;
use App\StockRevUp;

class ReversalUpController extends Controller
{
	public function index()
	{		
		$revup  = StockRevUp::all();

		return fractal()
		->collection($revup)
		->transformWith(new StockRevUpTransformer)
		->toArray();

	}
}
