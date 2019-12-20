<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    protected $appends = ['code'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getCodeAttribute()
    {
        $prefix = '';
        foreach (explode(' ', $this->service) as $word) {
            $prefix .= substr($word, 0, 1);
        }

        return $prefix . $this->number;
    }

    public function generateNumber()
    {
        $maxNum = self::whereService($this->service)->max('number');
        return sprintf("%04s", abs($maxNum + 1));
    }

    public function calculateSchedule()
    {
        $schedule = (new Carbon('8 am'))->addMinutes(($this->number - 1) * 10);

        if ($schedule->format('H') >= 12) {
            $schedule = $schedule->addHour(1);
            if ($schedule->format('H') >= 17) {
                $schedule = new Carbon('5 pm');
            }
        }

        return $schedule;
    }
}
