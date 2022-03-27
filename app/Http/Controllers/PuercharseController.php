<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;

class PuercharseController extends Controller
{
    public function getPurchasesByClient($clientId)
    {
        $purchases = Purchase::where('client_id', $clientId)->orderBy('id', 'asc')->get()->load(['comic']);

        return response()->json($purchases);
    }

    public function addPurchase($comicId, $clientId)
    {
        try{
            //Final object with data
            $purchase = new Purchase;
            $purchase->client_id = $clientId;
            $purchase->comic_id = $comicId;
            $purchase->state = 1;

            $purchase->save();
            return redirect('/');
        }

        catch(Exception $ex){
            $error = array(['error' => 'No se ha podido completar'.$ex]);
            return response()->json($error);
        }
    }

    public function deletePurchase($id)
    {
        $purchase = Purchase::find($id);
        $purchase->delete();
        return redirect('/shopcart');
    }

    public function deletePurchaseByClient($client_id)
    {
        $purchase = Purchase::where(['client_id' => $client_id, 'state' => 1]);
        if($purchase != null){
            $purchase->delete();
        }
        return redirect('/shopcart');
    }

    public function completePurchase($client_id)
    {
        $purchase = Purchase::where(['client_id' => $client_id, 'state' => 1]);
        if($purchase != null){
            $purchase->update(['state' => 2]);
        }
        return redirect('/shopcart');
    }
}
