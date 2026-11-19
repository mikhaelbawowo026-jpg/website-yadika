<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Staff;
use App\Models\Major;
use App\Models\Gallery;
use App\Models\Registration;

class PublicController extends Controller
{
    public function home()
    {
        $news = class_exists(News::class) ? News::latest()->take(3)->get() : collect();
        return view('pages.home', compact('news'));
    }

    public function profile()
    {
        $staff = class_exists(Staff::class) ? Staff::orderBy('order_num', 'asc')->get() : collect();
        return view('pages.profile', compact('staff'));
    }

    public function majorsIndex()
    {
        $majors = class_exists(Major::class) ? Major::all() : collect();
        return view('pages.majors.index', compact('majors'));
    }

    public function majorDetail($slug)
    {
        $major = class_exists(Major::class) ? Major::where('slug', $slug)->first() : null;
        return view('pages.majors.show', compact('major', 'slug'));
    }

    public function gallery()
    {
        $galleries = class_exists(Gallery::class) ? Gallery::latest()->get() : collect();
        return view('pages.gallery', compact('galleries'));
    }

    public function spmb()
    {
        return view('pages.spmb');
    }

    public function spmbStore(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'address' => 'required|string',
            'origin_school' => 'required|string|max:255',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'birth_place' => 'required|string|max:100',
            'birth_date' => 'required|date',
            'selected_major' => 'required|string',
        ]);

        $validated['registration_number'] = 'SPMB-' . date('Ymd') . '-' . rand(1000, 9999);
        $validated['status'] = 'Menunggu';

        Registration::create($validated);

        return redirect()->route('spmb')->with('success', 'Pendaftaran berhasil dikirim! Nomor Registrasi Anda: ' . $validated['registration_number']);
    }

    public function contact()
    {
        return view('pages.contact');
    }
}