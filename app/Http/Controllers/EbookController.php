<?php

namespace App\Http\Controllers;

use App\Models\EbookModel;
use Illuminate\Http\Request;

class EbookController extends Controller
{
    public function detail($id)
    {
        //
        $ebook = EbookModel::Where('ebook_id', $id)->get();
        return view('detail', compact('ebook'));
    }
}
