<?php 
namespace App\Repository\SuperAdmin;

use App\Models\User;
use Illuminate\Support\Facades\DB;
class DashboardRepository{

   public function model(){
        return User::class;
    }

    public static function dashboard_admin_Details(){
        $AdminResponse=DB::table('model_has_roles')->where('role_id',2)->get();
        $counts=count($AdminResponse);
        return $counts;
    }
    public static function dashboard_users_Details(){
        $UsersResponse=DB::table('model_has_roles')->where('role_id',3)->get();
        $counts=count($UsersResponse);
        return $counts;
    }
    public static function task_counts(){
       $TaskResponse=DB::table('tasks')->select("*")->get();
       $counts=count($TaskResponse);
       return $counts;
    }
    public static function project_count(){
        $ProjectCount=DB::table('service_details')->select("*")->get();
        $counts=count($ProjectCount);
        return $counts;
    }
}