<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = contact::all();

    return $contact;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new contact();

    $contact->nama_depan = $request->nama_depan;
    $contact->nama_belakang = $request->nama_belakang;
    $contact->nomor_telepon_ponsel = $request->nomor_telepon_ponsel;
    $contact->nomor_telepon_rumah = $request->nomor_telepon_rumah;
    $contact->email = $request->email;
    $contact->deskripsi = $request->deskripsi;

    $contact->save();

    return [
       'message' => 'Successfully create new contact',
    ];

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        return $contact;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
    {
        // validate
        $rules = array(
            'nama_depan' => 'required|max:255',
            'nama_belakang' => 'required|max:255',
            'nomor_telepon_ponsel' => 'required|max:255',
            'nomor_telepon_rumah' => 'required|max:255',
            'email' => 'required|email:rfc,dns',
            'deskripsi' => 'required'
        );
        $validator = validator()->make(request()->all(), $rules);

        if ($validator->fails()) {
            return [
                'message' => 'Format Input Tidak Sesuai!',
            ];
        } else {
            // store
            $contact = contact::find($id);

            $nama_depan = $request->nama_depan;
            $nama_belakang = $request->nama_belakang;
            $nomor_telepon_ponsel = $request->nomor_telepon_ponsel;
            $nomor_telepon_rumah = $request->nomor_telepon_rumah;
            $email = $request->email;
            $deskripsi = $request->deskripsi;

            $contact->nama_depan = $nama_depan;
            $contact->nama_belakang = $nama_belakang;
            $contact->nomor_telepon_ponsel = $nomor_telepon_ponsel;
            $contact->nomor_telepon_rumah = $nomor_telepon_rumah;
            $contact->email = $email;
            $contact->deskripsi = $deskripsi;

            $contact->save();

            return [
                'message' => 'Kontak Berhasil Di Update!',
            ];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact, $id)
    {
        
        $contact = contact::find($id);
        $contact->delete();


    return [
       'message' => 'Contact has been deleted',
    ];

    }
}
