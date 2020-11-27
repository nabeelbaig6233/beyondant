<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\meeting;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewContactAlert;
use App\User;

class EmailScheduled extends Model
{
    public function init() {
        $data = meeting::select(\DB::raw('DATEDIFF(now(),created_at) as daysDiff'),'user_id')
        ->where(\DB::raw('DATEDIFF(now(),created_at)'),'<=','7')->having('daysDiff','>','0')->get();


        if(!empty($data)) {
            foreach($data as $row) {
                $obj = User::select("first_name","email")->find($row->user_id);
                $first_name = $obj->first_name;
                $email = $obj->email;
                Mail::to("altaf.korejo@technado.co")->send(new NewContactAlert($first_name));
            }
        }
    }
}
