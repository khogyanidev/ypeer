<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {

        $members = Member::all();
        return view('members')
            ->with('allmembers', $members);
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'job' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'joiningdate' => 'required',
        ], ['fullname' => 'نوم تش مه پریږده']);

        Member::create(['fullname' => $request->fullname, 'job' => $request->job, 'location' => $request->location, 'phone' => $request->phone, 'joiningdate' => $request->joiningdate,]);

        return redirect()->back();
    }
}
