<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DocumentRegistrationController extends Controller
{
    public function akta()
    {
        return Inertia::render('DocumentRegistration/Akta');
    }

    public function ktp()
    {
        return Inertia::render('DocumentRegistration/Ktp');
    }

    public function kk()
    {
        return Inertia::render('DocumentRegistration/Kk');
    }

    public function ticket()
    {
        return Inertia::render('DocumentRegistration/Ticket');
    }
}
