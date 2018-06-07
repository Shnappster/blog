<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationForm $form)
    {
        session()->flash('message', 'Thanks for registration');

        $form->persist();

        return redirect('/');
    }
}
