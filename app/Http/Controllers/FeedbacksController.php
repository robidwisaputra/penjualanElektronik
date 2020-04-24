<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbacksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::all();
        $access = Auth::user()->access;
        return view('feedback.index', compact('feedbacks', 'access'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $access = Auth::user()->access;
        return view('feedback.feedback', compact('access'));
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
            'customer_name' => 'required',
            'email'         => 'email|required',
            'rating'        => 'required'
        ]);

        Feedback::create($request->all());

        return redirect('feedback/add')->with('status', 'Thanks For Your Review');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        $access = Auth::user()->access;
        return view('feedback.edit', compact('feedback', 'access'));
    }

    /**
     * Fungsi ini untuk mengubah data spesifik berdasarkan id
     *
     * @param[in] Request parameter data baru
     * @param [in] Feddback parameter data lama
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedback $feedback)
    {
        $request->validate([
            'customer_name' => 'required',
            'email'         => 'email|required',
            'rating'        => 'required'
        ]);

        $result = Member::find($feedback->id_feedback)->first();
        $status = $result->update($request->all());

         return redirect('feedback')->with('status', 'Thanks For Your Review');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        Feedback::destroy($feedback->id_feedback);
        return redirect('feedback')->with('status', 'Data Succesfully Deleted');
    }
}
