<?php

namespace App\Models\Admin;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class AdminLog extends \Ppcsite\RecordLog\Models\AdminLog
{
    use HasFactory;
    const LOGIN_HOME = '系統管理-登入首頁';
    const REGISTER_ACCOUNT = '系統管理-註冊帳號';
}
