<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;
use App\Contract;


class PurchaseController extends Controller
{
    

public function index()
    {
        return response()->json(Purchase::all());
    }

    public function show($id)
    {
        return response()->json(Purchase::find($id));
    }

    public function create(Request $request)
    {
      
        $validator = Validator::make($req->all(), [
            'contract_id' => 'required'
        ]);

        $contract_id  = (int)$request->get('contract_id');
      
        if ($validator->fails()) {

            return redirect('create')->withErrors($validator);
        }


           $init_balance=\Contract::totalBalance($contract_id);

           $rest_balance = Purchase::restBalance($contract_id);

           if ($init_balance >= $rest_balance) {

           $purchase = Purchase::create($request->all());

           return response()->json($purchase, 200);

         }

         else {      
  
        $message = "you are spent all available credits";

        return response()->json($message, 201);

       }

    }

    public function update($id, Request $request)
    {
        $purchase = Purchase::findOrFail($id);
        $purchase->update($request->all());

        return response()->json($purchase, 200);
    }

    public function delete($id)
    {
        Purchase::findOrFail($id)->delete();
        return response('Deleted purchase successfully', 200);
    }














}
