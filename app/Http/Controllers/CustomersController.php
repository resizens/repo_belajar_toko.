<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customers;
use Illuminate\Support\Facades\Validator;

class CustomersController extends Controller
{
	public function show()
	{
		return customers::all();
	}

    public function store(Request $request)
    {
    	$validator=Validator::make($request->all(),
    		[
    			'id_customers' 	=> 'required',
    			'nama' 			=> 'required',
    			'gender'		=> 'required',
    			'alamat'		=> 'required'    			
    		]
    	);

    	if($validator->fails()){
    		return Response()->json($validator->errors());
    	}

    	$simpan = customers::create([
    		'id_customers' 	=> $request->id_customers,
    		'nama'			=> $request->nama,
    		'gender' 		=> $request->gender,
    		'alamat'		=> $request->alamat    		
    	]);

    	if($simpan)
    	{
    		return Response()->json(['status' => 1]);
    	}
    	else
    	{
    		return Response()->json(['status' => 0]);
    	}
	}
	
	public function update($id, Request $request)
 	{
 	$validator=Validator::make($request->all(),
 		[
			'id_customers' 	=> 'required',
			'nama' 			=> 'required',
			'gender'		=> 'required',
			'alamat'		=> 'required'  	
 		]
	 );
	 
	 if($validator->fails()) 
	 {
 		return Response()->json($validator->errors());
 	 }
 	$ubah = product::where('id', $id)->update([
		'id_customers' 	=> $request->id_customers,
		'nama'			=> $request->nama,
		'gender' 		=> $request->gender,
		'alamat'		=> $request->alamat 
		 ]
	);
	 if($ubah) 
	 {
 		return Response()->json(['status' => 1]);
 	 }
	 else 
	 {
 		return Response()->json(['status' => 0]);
 	 }
 }

	public function destroy($id)
	{
	   $hapus = customers::where('id', $id)->delete();
		if($hapus) 
		{
			return Response()->json(['status' => 1]);
		}
		 
		else 
		{
			return Response()->json(['status' => 0]);
		 }
	}
}
