# Laravel-adminlte-view-component
### This package used for commonly used view component

---

## Installation

#### 1. Install the package via composer

```shell
composer require ppcsite/record_log
```

#### 2. Publish migration

```bash
php artisan vendor:publish --provider="Ppcsite\RecordLog\RecordLogServiceProvider"
```

#### 3. Run the Migrations

```shell
php artisan migrate
```

### 4. Usage

```php
AdminLog::Log(string $function_name, string $action, Model $data_model=null, string $comment=null)
```

#### Example

> After create a log model, extends \Ppcsite\RecordLog\Models\AdminLog

```php
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
    // add new function name/action const 
    const LOGIN_HOME = '系統管理-登入首頁';
    const REGISTER_ACCOUNT = '系統管理-註冊帳號';
}
```

> Use log function from model in controller

```php
use App\Models\Admin\AdminLog;

protected function create(array $data)
{
    ...
    $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
    ]);

    AdminLog::Log(
        AdminLog::REGISTER_ACCOUNT,
        AdminLog::ACTION_REGISTER,
        $user,
        $user->name.'已註冊');
    ...
}
```

#### 5. Default action constants
| Key   | Value |
|:------|:------|
| ACTION_NEW | 新增 |
| ACTION_EDIT   | 編輯 |
| ACTION_DELETE | 刪除 |
| ACTION_SEARCH | 查詢 |
| ACTION_POST | 送出 |
| ACTION_DOWNLOAD | 下載 |
| ACTION_UPLOAD | 上傳 |
| ACTION_MAIL | 發信 |
| ACTION_LOGIN | 登入 |
| ACTION_LOGOUT | 登出 |
| ACTION_REGISTER | 註冊 |

## Contribution
You're open to create any Pull request.
