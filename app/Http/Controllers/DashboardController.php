<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function __invoke()
    {
        if (auth()->user()->authenticatable_type !== null) {

            $percentage = $this->getProgress();
            $color = $percentage > 80 ? '#7F9CF5' : '#ef4444';

            $progress = (object) [
                'percentage' => $percentage,
                'color' => $color
            ];
        } else {
            $percentage = count(User::get());

            $progress = (object) [
                'percentage' => $percentage
            ];
        }

        $data = compact('progress');

        return Inertia::render('Dashboard', $data);
    }

    public function getProgress()
    {
        $student = auth()->user()->authenticatable;

        $attributes = $student->getAttributes();

        return ceil(($student->progress) / (count($attributes)) *  100);
    }
}
