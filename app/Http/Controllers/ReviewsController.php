<?php

namespace App\Http\Controllers;

use App\Review;
use App\Logging;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
{
    /**
     * Menampilkan halaman form yang akan diisi oleh customer
     *
     * 
     */
    public function form()
    {
        return view('review.form');
    }

    /**
     * Menampilkan semua isi ulasan yang ada di database.
     *
     * 
     */
    public function index()
    {
        $data['access'] = Auth::user()->access;
        $data['totalreviews'] = Review::count();
        $data['reviews'] = Review::all();
        return view('review.index')->with($data);
    }

    /**
     * Menyimpan data yang diisikan dari form ke database
     *
     * @param[in] $request parameter yang isinya adalah data dari form
     * 
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'name' => 'required',
            'review' => 'required',
            'feedback' => 'required'
        ]);

        $review = new Review;
        $review->email = $request->email;
        $review->phone = $request->phone;
        $review->name = $request->name;
        $review->review = $request->review;
        $review->date = date('Y-m-d');
        $review->feedback = $request->feedback;
        $review->save();

        return redirect('review')->with('status', 'Ulasan Anda Telah dikirim');
    }

    /**
     * Menampilkan halaman edit beserta mengirim data berdasarkan id
     *
     * @param[in] $review mengembalikan data dari database berdasarkan id
     * 
     */
    public function edit(Review $review)
    {
        $access = Auth::user()->access;
        return view('review.edit', compact('review', 'access'));
    }

    /**
     * Menyimpan data yang akan diubah ke database
     *
     * @param  $request parameter yang isinya adalah data yang akan disimpan
     * @param  $review parameter yang isinya adalah data lama yang akan diubah
     * 
     */
    public function update(Request $request, Review $review)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'name' => 'required',
            'review' => 'required',
            'feedback' => 'required'
        ]);

        $review = Review::find($review->id_review);
        $review->email = $request->email;
        $review->phone = $request->phone;
        $review->name = $request->name;
        $review->review = $request->review;
        $review->date = date('Y-m-d');
        $review->feedback = $request->feedback;
        $review->save();

        return redirect('display-review')->with('status', 'Data berhasil diubah');
    }

    /**
     * Menghapus data berdasarkan id
     *
     * @param $review parameter yang berisi data yang akan dihapus
     * 
     */
    public function destroy(Review $review)
    {
        Review::destroy($review->id_review);
        return redirect('display-review')->with('status', 'Data berhasil dihapus');
    }

    /**
     * Menampilkan semua data logging
     *
     * 
     * 
     */
    public function logging(){
        $data['access'] = Auth::user()->access;
        $data['totalloggings'] = Logging::count();
        $data['loggings'] = Logging::all();
        return view('logging')->with($data);
    }
}
