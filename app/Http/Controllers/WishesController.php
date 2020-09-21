<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wish;

class WishesController extends Controller
{
    public function submit(request $request)
    {
        $this->validate($request, [
            'wens' => 'required',
            'foto' => 'required',
            'bericht' => 'required',
            'prijs' => 'required',
            'link' => 'required'
        ]);

        $wish = new wish;
        $wish->wens = $request->input('wens');
        $wish->foto = $request->input('foto');
        $wish->bericht = $request->input('bericht');
        $wish->prijs = $request->input('prijs');
        $wish->link = $request->input('link');

        $wish->save();

        return redirect('/wishes');
    }

    public function getWishes()
    {
        $wishes = Wish::all();
        return view('wishes', ['wishes' => $wishes]);
    }

    public function showWishes()
    {
        $wishes = Wish::all();
        return view('delete_wish', ['wishes' => $wishes]);
    }

    public function printWishes()
    {
        $wishes = Wish::all();
        return view('update_Wish', ['wishes' => $wishes]);
    }


    public function verwijderWishes(){
        $wens = $_POST['lijst_wensen'];
        Wish::where('wens', $wens)->delete();
        return redirect('delete_wish');
    }

    public function updateWishes(){
        $naam_wens = $_POST['wens'];
        $wens = $_POST['naam_wens'];
        $foto = $_POST['foto'];
        $prijs = $_POST['prijs'];
        $link = $_POST['link'];
        $bericht = $_POST['bericht'];

        Wish::where('wens', $naam_wens)->update([
            'wens' => $wens,
            'foto' => $foto,
            'prijs' => $prijs,
            'link' => $link,
            'bericht' => $bericht
        ]);

        return redirect('delete_wish');
    }
}



