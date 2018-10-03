<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationsController extends Controller
{
	public function get() {
		$notification = auth()->user()->unreadNotifications;
		return $notification;
	}

	public function read() {
		auth()->user()->unreadNotifications()->find(request('id'))->markAsRead();
		return 'success';
	}
}
