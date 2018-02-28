<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Fractal\Resource\Collection;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use App\Transformers\StockBull1Transformer;
use App\StockBull1;

class StockBull1Controller extends Controller
{
	public function index()
	{		
		// $bull  = StockBull1::all();
		// return fractal()
		// ->collection($bull)
		// ->transformWith(new StockBull1Transformer)
		// ->toArray();
		$bull = StockBull1::paginate(15);
        $bullCollection = $bull->getCollection();

        return fractal()
        ->collection($bullCollection)
        ->parseIncludes(['group'])
        ->transformWith(new Stockbull1Transformer)
        ->paginateWith(new IlluminatePaginatorAdapter($bull))
        ->toArray();
	}
}
