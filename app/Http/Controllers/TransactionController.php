<?php
 
namespace App\Http\Controllers;
 
use App\Models\EbookModel;
use App\Models\OrderModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
 
class TransactionController extends Controller
{
    public function create(){
        return view('cart');
    }
 
    public function add($id){
        $ebook = EbookModel::find($id);
        $cart = Session::get('cart');
 
        if(!$cart){
            $cart = [
                $id => [
                    'ebook_id' => $ebook->id,
                    'title' => $ebook->title,
                    'author' => $ebook->author,
                    'description' => $ebook->description
                ]
            ];
 
            Session::put('cart', $cart);
            return redirect('home');
        }else if(isset($cart[$id])){
            return redirect('home');
        }
 
        $cart[$id] = [
            'ebook_id' => $ebook->id,
            'title' => $ebook->title,
            'author' => $ebook->author,
            'description' => $ebook->description
        ];
 
        Session::put('cart', $cart);
        return redirect('home');
    }
 
    public function delete($id){
        $cart = Session::get('cart');
        unset($cart[$id]);
 
        session()->put('cart', $cart);
        return redirect()->back();
    }
 
    public function checkout(){
        $cart = Session::get('cart');
 
        foreach ($cart as $id => $details){
            $transaction = new OrderModel();
            $transaction->account_id = auth()->user()->account_id;
            $transaction->ebook_id = $id;
            $transaction->order_date = date('y-m-d');
            $transaction->save();
        }

        Session::forget('cart');
        return redirect('success-checkout');
    }

    public function success(){
        return view('checkout-success');
    }
}