<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function show($id)
    {
    	$notification = auth()->user()->notifications()->find("$id");
    	$notification->markAsRead();
    	return redirect($notification->data['action']);
    }
}
