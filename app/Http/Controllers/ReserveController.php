<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use Illuminate\Http\Request;

class ReserveController extends Controller
{

    public function index()
    {
        $reserves = Reserve::with(['user', 'activity'])->get();
        return view('dashboard', [
            "reserves" =>  $reserves
        ]);
    }

    public function store(Request $r)
    {
        $r->validate([
            "activity_id" => 'required|int',
            "n_persons" => 'required|int',
            "user_id" => 'required|int',
            "sub_total" => 'required',
        ]);

        Reserve::create([
            "activity_id" => $r->activity_id,
            "quantity" => $r->n_persons,
            "user_id" => $r->user_id,
            "sub_total" => $r->sub_total,
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
        Reserve::where('id', $id)->delete();

        return redirect('reserves');
    }
}
