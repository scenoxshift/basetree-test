<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationsController extends Controller
{
	public function index()
	{
		$notifications = auth()->user()->notifications->filter(function ($notification){
			return $notification->read_at !== NULL;
		})->toArray();
		return view('notifications.index', compact('notifications'));
	}
	/**
	 * @return mixed
	 */
	public function get() {
		$notifications = auth()->user()->unreadNotifications;
		return $notifications;
	}

	/**
	 * @return string
	 */
	public function read() {
		auth()->user()->unreadNotifications()->find(request('id'))->markAsRead();
		return 'success';
	}
}
