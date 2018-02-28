<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Fractal\Resource\Collection;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use App\Transformers\StockMasterTransformer;
use App\StockMaster;

class StockMasterController extends Controller
{
	public function index()
	{		

		// $masters  = $master->all();

		// return fractal()
		// ->collection($masters)
		// ->transformWith(new StockMasterTransformer)
		// ->toArray();

		$masters = StockMaster::paginate(15);
        $masterCollection = $masters->getCollection();

        return fractal()
        ->collection($masterCollection)
        ->parseIncludes(['group'])
        ->transformWith(new StockMasterTransformer)
        ->paginateWith(new IlluminatePaginatorAdapter($masters))
        ->toArray();		

	}

	public function show($id)
	{
		
		$masters = StockMaster::where('id_ticker', strtoupper($id))->first();

		if ($masters) {          
			return fractal()
			->item($masters)      
			->transformWith(new StockMasterTransformer)		
			->toArray();
		} 
		return response()->json(['status' => 'error', 'message' => 'Data not found'],404);
		
	}

}
