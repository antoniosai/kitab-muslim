<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Kitab;
use App\Models\MusnadAhmad;
use App\Models\MusnadDarimi;
use App\Models\MusnadSyafii;
use App\Models\RiyadhusShalihin;
use App\Models\ShahihBukhari;
use App\Models\ShahihMuslim;
use App\Models\SunanAbuDaud;
use App\Models\SunanIbnuMajah;
use App\Models\SunanNasai;
use App\Models\SunanTirmidzi;

class KitabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kitab = Kitab::get();

        return response()->json($kitab);
    }

    public function show(Request $request, $slug)
    {
        $kitab = $this->getKitab($slug);

        return response()->json($kitab->paginate(10));
    }

    public function showDetail($slug, $kitab_id)
    {
        $kitab = $this->getKitab($slug);

        return $kitab->find($kitab_id);
    }

    private function getKitab($slug)
    {
        $kitab = [];

        if ($slug == 'musnad_ahmad') {
            $kitab = MusnadAhmad::query();
        } else if ($slug == 'musnad_darimi') {
            $kitab = MusnadDarimi::query();
        } else if ($slug == 'musnad_syafii') {
            $kitab = MusnadSyafii::query();
        } else if ($slug == 'riyadhus_shalihin') {
            $kitab = RiyadhusShalihin::query();
        } else if ($slug == 'shahih_bukhari') {
            $kitab = ShahihBukhari::query();
        } else if ($slug == 'shahih_muslim') {
            $kitab = ShahihMuslim::query();
        } else if ($slug == 'sunan_abu_daud') {
            $kitab = SunanAbuDaud::query();
        } else if ($slug == 'sunan_ibnu_majah') {
            $kitab = SunanIbnuMajah::query();
        } else if ($slug == 'sunan_nasai') {
            $kitab = SunanNasai::query();
        } else if ($slug == 'sunan_tirmidzi') {
            $kitab = SunanTirmidzi::query();
        }

        return $kitab;
    }
}
