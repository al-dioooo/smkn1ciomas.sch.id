<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('index');
    }

    // Profile
    public function history() {
        return view('profile.history');
    }
    public function visionMission() {
        return view('profile.vision-mission');
    }
    public function leadership() {
        return view('profile.leadership');
    }
    public function teacher() {
        return view('profile.teacher');
    }
    public function administration() {
        return view('profile.administration');
    }

    // Majors
    public function rpl() {
        return view('majors.rpl');
    }
    public function anm() {
        return view('majors.anm');
    }
    public function tkr() {
        return view('majors.tkr');
    }
    public function tpl() {
        return view('majors.tpl');
    }
    public function pspt() {
        return view('majors.pspt');
    }

    // Studentship
    public function osis() {
        return view('studentship.osis');
    }
    public function extracurricular() {
        return view('studentship.extracurricular');
    }
    public function teachingFactory() {
        return view('studentship.teaching-factory');
    }
    public function industry() {
        return view('studentship.industry');
    }
    public function alumni() {
        return view('studentship.alumni');
    }

    public function jobExchange() {
        return view('job-exchange');
    }

    public function contact() {
        return view('contact');
    }
}
