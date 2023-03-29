<?php

namespace App\Http\Controllers;

use App\Models\Admin\AdminLog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $last_login_record_time = AdminLog::where('user_id',Auth::user()->id)
            ->where('action','登入')
            ->orderBy('created_at','desc')
            ->first()
            ->created_at
        ;
        $diff_login_time = Carbon::now()->diffInMinutes($last_login_record_time);
        if (Auth::check() && ($diff_login_time > 10)) {
            AdminLog::Log(
                AdminLog::LOGIN_HOME,
                AdminLog::ACTION_LOGIN,
                null,
                Auth::user()->name.'登入系統'
            );
        }
        return view('home');
    }
}
