<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transformers\StockRevDownTransformer;
use App\StockRevDown;

class ReversalDownController extends Controller
{
	public function index()
	{		
		$revdown  = StockRevDown::all();
		return fractal()
		->collection($revdown)
		->transformWith(new StockRevDownTransformer)
		->toArray();
	}

}
