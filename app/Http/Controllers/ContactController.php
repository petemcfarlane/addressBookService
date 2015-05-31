<?php

namespace App\Http\Controllers;


use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth.basic');
    }

    public function index(Contact $contact)
    {
        return response($contact->all());
    }

    public function store(Request $request)
    {
        if (!$request->has('name') || !$request->has('is_company')) {
            return response([
                'status'  => 'error',
                'message' => 'Invalid contact data',
                'data'    => $request->input()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        Contact::create($request->input());

        return response([
            'status'  => 'success',
            'message' => 'Successfully created contact'
        ], Response::HTTP_CREATED);
    }
}