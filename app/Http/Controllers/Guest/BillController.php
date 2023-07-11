<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use Illuminate\Http\Request;


class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    // 

    private $validations = [
        'id'           => 'required|string|min:2|max:10',
        'number'        => 'required|string|min:5|max:10',
        'year'          => 'required|year',
        'paid'          => 'string',
    ];

    //


    public function index()
    {
        $bills = Bill::all();
        return view('bills.index', compact('bills'));
    }

    // public function boolean($var_num)
    // {
    //     if ($var_num) {
    //         return 'si';
    //     } else {
    //         return 'no';
    //     }
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validations);

        $data = $request->all();
        $newBills = new Bill();
        $newBills->id          = $data['id'];
        $newBills->number       = $data['number'];
        $newBills->year         = $data['year'];
        $newBills->paid         = $data['paid'];
        $newBills->save();

        return redirect()->route('bills.show', ['bills' => $newBills->id]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $bill = Bill::findOrFail($id);


        return view('bills.show', compact('bill'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
