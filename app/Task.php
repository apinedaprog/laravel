<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class Task extends authenticating
{
    use AuthenticatesUsers;
}
