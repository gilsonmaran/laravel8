<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotificationRequest;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index() {
        return view('notification.index');
    }

    public function create() {
        return view('notification.create');
    }

    public function store(NotificationRequest $notification) {
        $store = $notification->except('_token');
        $stored = Notification::create($store);
        return redirect()->route('notification');
    }
}
