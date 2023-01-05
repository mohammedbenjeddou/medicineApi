<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
class MedicineController extends Controller
{
    public function index()
  { 

    $medicines =  Medicine::all();
    return response()->json( $medicines);
  } 
  
  public function store(Request $request)
  {

   $medicine= new Medicine;
   $medicine->name =$request->name;
   $medicine->description =$request->description;
   $medicine->category=$request->category;
   $medicine->time =$request->time;
   $medicine->status =$request->status;
   $medicine->quantity =$request->quantity;


  

   $medicine->save();  
   
}
public function update(Request $request, $id)
    { 
      $medicine = Medicine::find($id);
      $medicine->name =$request->name;
      $medicine->description =$request->description;
      $medicine->category=$request->category;
      $medicine->time =$request->time;
      $medicine->status =$request->status;
       
            $medicine->save();
          }

public function destroy($id)
{
    $medicine = Medicine::find($id);
    $medicine->delete();
    return response()->json('deleted!');
}
}
