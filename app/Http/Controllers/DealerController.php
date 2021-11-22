<?php

namespace App\Http\Controllers;

use App\Http\Requests\DealerRequest;
use App\Models\Dealer;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DealerController extends Controller
{
    private $dealer;
    private $status;
    public function __construct(Dealer $dealer, Status $status)
    {
        $this->dealer = $dealer;
        $this->status = $status;
    }
    public function index()
    {
        $dealer = Dealer::all();
        return view('home', compact('dealer'));
    }
    public function create()
    {
        $status = $this->status->all();
        return view('dealers.add', compact('status'));
    }
    public function store(DealerRequest $request)
    {

            $dealer = new Dealer();
            $dealer->code = $request->code;
            $dealer->name = $request->name;
            $dealer->phone = $request->phone;
            $dealer->email = $request->email;
            $dealer->manager = $request->manager;
            $dealer->status = $request->status;

            $dealer->save();


        return redirect()->route('dealer.list')->with('success', 'Thêm thành công đại lý !');
    }

    public function destroy($id)
    {
        $dealer = Dealer::findOrFail($id);
        $dealer->delete();
        return redirect()->route('dealer.list')->with('success', 'Đã Xoá thành công !');
    }

    public function update($id)
    {
        $dealer = Dealer::findOrFail($id);
        return view('dealers.edit', compact('dealer'));
    }

    public function edit(DealerRequest $request, $id)
    {
        $dealer = Dealer::findOrFail($id);
        $dealer->code = $request->code;
        $dealer->name = $request->name;
        $dealer->phone = $request->phone;
        $dealer->email = $request->email;
        $dealer->manager = $request->manager;
        $dealer->status = $request->status;

        $dealer->save();
        return redirect()->route('dealer.list')->with('success', 'Sửa công đại lý !');

    }

    public function search(Request $request)
    {
        $dealer = Dealer::where('name','like','%'.$request->key.'%')
                        ->orWhere('code', $request->key)
                        ->get();

        return view('dealers.search', compact('dealer'));
    }
}
