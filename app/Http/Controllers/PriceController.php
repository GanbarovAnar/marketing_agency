<?php

namespace App\Http\Controllers;

use App\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PriceController extends Controller
{
    public function addOurServices(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required|max:500'
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $price = new Price();
        $price->price = $request->price;
        $price->description = $request->description;
        $price->save();

        return redirect('/ourservices');
    }

    public function pricing()
    {
        $ourservices = Price::orderBy('created_at', 'asc')->get();
        return view('pricing', [
            'ourservices' => $ourservices
        ]);
    }

    public function ourservices()
    {
        $ourservices = Price::orderBy('created_at', 'asc')->get();

        return view('ourservices', [
            'ourservices' => $ourservices
        ]);
    }
    public function delete(Request $request)
    {
        Price::findOrFail($request->id)->delete();

        return redirect('/ourservices');
    }
}
