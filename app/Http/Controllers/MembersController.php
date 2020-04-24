<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalmembers = Member::count();
        $members = Member::all();
        $access = Auth::user()->access;
        return view('member.index', compact('members' , 'totalmembers', 'access'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $access = Auth::user()->access;
        return view('member.create', compact('access'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email'
        ]);

        $status = Member::create($request->all());
        if($status) return redirect('member')->with('status', 'Data Successfully Added!');
        else return redirect('member')->with('status', 'Data Failed Added!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        $access = Auth::user()->access;
        return view('member.edit', compact('member', 'access'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email'
        ]);

        $input = $request->all();
        $result = Member::find($member->id_member)->first();
        $status = $result->update($input);


        if($status) return redirect('member')->with('status', 'Data Successfully Updated');
        else return redirect('member')->with('status', 'Data Failed Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $status = Member::destroy($member->id_member);
        if($status) return redirect('member')->with('status', 'Data Successfully Deleted');
        else return redirect('member')->with('status', 'Data Failed Deleted');
    }
}
