<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitab extends Model
{
    use HasFactory;

    protected $table = 'kitab';

    protected $appends = [
        'count'
    ];

    public function getCountAttribute()
    {
        if ($this->slug == 'musnad_ahmad') {
            return MusnadAhmad::count();
        } else if ($this->slug == 'musnad_darimi') {
            return MusnadDarimi::count();
        } else if ($this->slug == 'musnad_syafii') {
            return MusnadSyafii::count();
        } else if ($this->slug == 'riyadhus_shalihin') {
            return RiyadhusShalihin::count();
        } else if ($this->slug == 'shahih_bukhari') {
            return ShahihBukhari::count();
        } else if ($this->slug == 'shahih_muslim') {
            return ShahihMuslim::count();
        } else if ($this->slug == 'sunan_abu_daud') {
            return SunanAbuDaud::count();
        } else if ($this->slug == 'sunan_ibnu_majah') {
            return SunanIbnuMajah::count();
        } else if ($this->slug == 'sunan_nasai') {
            return SunanNasai::count();
        } else if ($this->slug == 'sunan_tirmidzi') {
            return SunanTirmidzi::count();
        }
    }
}
