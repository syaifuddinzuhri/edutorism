<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Service::get();
        $setting = Setting::first();
        return view('admins.services.index', compact('data','setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payload = $request->all();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = 'file-' . time() . '.' . $extension;
            $tujuan_upload = 'uploads/file';
            $file->move($tujuan_upload, $filename);
            $payload['file'] = $filename;
        }
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $filename = 'icon-' . time() . '.' . $extension;
            $tujuan_upload = 'uploads/icon';
            $file->move($tujuan_upload, $filename);
            $payload['icon'] = $filename;
        }
        Service::create($payload);
        toast('Data layanan berhasil disimpan', 'success');
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('admins.services.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = Service::find($id);

        return view('admins.services.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $payload = $request->all();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $image_name = 'file-' . time() . '.' . $extension;
            $tujuan_upload = 'uploads/file';
            $file->move($tujuan_upload, $image_name);
            $payload['file'] = $image_name;
        } else
            unset($payload['file']);
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $filename = 'icon-' . time() . '.' . $extension;
            $tujuan_upload = 'uploads/icon';
            $file->move($tujuan_upload, $filename);
            $payload['icon'] = $filename;
        } else
            unset($payload['icon']);
        $data = Service::find($id);
        $data->update($payload);
        toast('Data layanan berhasil diupdate', 'success');
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Service::find($id);
        $data->delete();
        toast('Data layanan berhasil dihapus', 'success');
        return redirect()->route('service.index');
    }
}
