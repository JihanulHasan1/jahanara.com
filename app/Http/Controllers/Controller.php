<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\donations;
use App\Models\members;
use App\Models\overlook;
use App\Models\task;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login(Request $request)
    {
        $userInfo = users::where('email', '=', $request->email)->first();


        if ($userInfo->name == 'jihanul Hasan') {
            if ($request->password == $userInfo->password) {
                return view('dashboard1', ['loggedUser' => $userInfo]);
            }
        }
        if ($userInfo->name == 'fahim') {
            return view('Managerdashboard', ['loggedUser' => $userInfo]);
        }
    }
    public function donation(Request $request)
    {
        $allDonation = donations::all();
        return view('donation', ['allDonations' => $allDonation]);
    }
    public function ManagerDonation(Request $request)
    {

        $allDonation = donations::all();
        return view('ManagerDonation', ['allDonations' => $allDonation]);
    }
    public function members(Request $request)
    {
        $allMembers = members::all();
        return view('Members', ['allMembers' => $allMembers]);
    }
    public function Overlook(Request $request)
    {
        $everything = overlook::all();
        return view('Overlook', ['everything' => $everything]);
    }

    public function Volunteer(Request $request)
    {
        return view('VolunteerDashboard');
    }
    public function ShowTask(Request $request)
    {

        $allTask = task::all();
        return view('VolunteerPage',['allTask'=>$allTask]);
    }
    public function Account(Request $request)
    {

        $allTask = task::all();
        return view('Account',['allTask'=>$allTask]);
    }
    public function Message(Request $request)
    {

        return view('message');
    }
}
