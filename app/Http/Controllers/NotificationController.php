<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotificationRequest;
use App\Models\Notification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::all();
        return view('notification.index', compact(['notifications']));
    }

    public function create()
    {
        return view('notification.create');
    }

    public function store(NotificationRequest $notification)
    {
        $store = $notification->except('_token');
        Notification::create($store);
        return redirect()->route('notification');
    }

    public function edit($id)
    {
        $notification = DB::table('notifications')->find($id);

        if (!$notification)
            return view('notification.index');


        return view('notification.edit', compact(['notification']));
    }

    public function update(NotificationRequest $notification, $id)
    {
        // dd($notification->all());
        $update = $notification->except('_token');
        Notification::find($id)->update($update);

        return redirect()->route('notification');
    }
}
