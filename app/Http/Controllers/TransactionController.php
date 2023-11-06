<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = Transaction::with('detail.flower')->where('user_id', Auth::id())->get();
        $data = [
            'transaction' => $transaction
        ];
        // return $data;
        return view('transaction.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $cart = $user->cart;
        $data = [
            'user' => $user,
            'cart' => $cart
        ];
        return view('transaction.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $user->update($request->user);

        $transaction = Transaction::create([
            'user_id' => $user->id,
            'total' => $request->total,
            'payment_type' => $request->payment_type
        ]);

        foreach($request->transaction_detail as $row){
            TransactionDetail::create([
                'transaction_id' => $transaction->id,
                'flower_id' => $row['flower_id'],
                'qty' => $row['qty'],
            ]);
        }

        $user->cart()->delete();

        return redirect()->route('transaction.show', $transaction);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        $data = [
            'transaction' => $transaction
        ];
        return view('transaction.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
