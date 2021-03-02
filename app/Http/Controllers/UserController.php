<?php

namespace App\Http\Controllers;
use Razorpay\Api\Api;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Order;
use Validator;
use Redirect;


class UserController extends Controller
{

    //
    private $razorPayId='rzp_test_mP8FZcgOjAL2bQ';
    private $razorPayKey='FN2u1ERQwgWGeU3SFIUOcPkh';
    public function Initiate(Request $request)
    {
        
        $validatedData=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
            'mobile'=>'required|max:10|min:10',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'pincode'=>'required',
            'qty'=>'required',
             'lname'=>'required',
             'country'=>'required',
             'billing_address_2'=>'required',
        ]);
        if($validatedData->fails())
        {
            return Redirect::back()->withErrors($validatedData);
        }
        else{
        $qty=$request->qty;
         //return $request->all();
         $api = new Api($this->razorPayId, $this->razorPayKey);
         $reciept_id=Str::random(20);
         $amount=599*100*$qty;
         $order = $api->order->create(array(
            'receipt' => $reciept_id,
            'amount' => $amount,
            'currency' => 'INR'
            )
          );

          $response=[
                'orderId'=>$order['id'],
                'razorPayId'=>$this->razorPayId,
                'amount'=>$amount,
                'name'=>$request->name,
                'currency' => 'INR',
                'email'=>$request->email,
                'contanctNumber'=>$request->mobile,
                'address'=>$request->address,
                'city'=>$request->city,
                'state'=>$request->state,
                'pincode'=>$request->pincode,
                'qty'=>$qty,
                'lname'=>$request->lname,
                'country'=>$request->country,
                'billing_address_2'=>$request->billing_address_2,
                'description'=>'Testing Description'

          ];

          return view('payment_page',compact('response'));
        }
    }


    public function form(Request $request)
    {
        $data['qty']=$request->quantity;
        
        return view("checkout",$data);
    }

    public function payment_success(Request $request)
    {
        
       $signiture_status= $this->SignitureVerify(
            $request->all()['rzp_signiture'],
            $request->all()['rzp_paymentid'],
            $request->all()['orderid']

        );
       
        if($signiture_status==true)
        {
            //payment success 
            //return $request->all();
           // $id=session()->get('id');
           
            $order=new Order;
            $order->name=$request->name;
            $order->mobile=$request->mobile;
            $order->email=$request->email;
            $order->address=$request->address;
            $order->city=$request->city;
            $order->state=$request->state;
            $order->pincode=$request->pincode;
            $order->qty=$request->qty;
            $order->lname=$request->lname;
            $order->country=$request->country;
            $order->billing_address_2=$request->billing_address_2;
            $order->amount=$request->amount;
            $order->order_id=$request->orderid;
            $order->payment_id=$request->rzp_paymentid;
            $order->save();
       
            
            return redirect('/product')->with('message','Order Succesfully Placed');

        }
        else {
          echo "payment fail";
        }
    }


    private function SignitureVerify($_signiture,$_paymentId,$_orderId)
    {
        //return $_paymentId;
        try{
            $api = new Api($this->razorPayId, $this->razorPayKey);
            $attributes  = array('razorpay_signature'  => $_signiture,  'razorpay_payment_id'  => $_paymentId ,  'razorpay_order_id' => $_orderId);
           
            $order  = $api->utility->verifyPaymentSignature($attributes);
          
            return true;
        }
        catch(\Exception $e)
        {
            return false;
        }
    }

}
