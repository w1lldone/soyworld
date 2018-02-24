<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{

	function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$notifications = auth()->user()->notifications;

		return view('notification.index', compact('notifications'));
	}

    public function show($id)
    {
    	$notification = auth()->user()->notifications()->find("$id");
    	$notification->markAsRead();
    	return redirect($notification->data['action']);
    }
}
