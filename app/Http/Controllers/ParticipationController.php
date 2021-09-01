<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Participant;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParticipationController extends Controller
{
    public function list_topics(Request $request) { //dependant dropdown for grade=>topics
        $grade_id = $request->get('grade_id');
        $output = '';
        $topics = DB::table('topics')->where('grade_id','=',$grade_id)->get();
        if(count($topics)==0){
            $output.='
            <option value="">No Topic found</option>';
        }else
        foreach ($topics as $topic) {
            $output .= '
            <option value="' . $topic->topic . '">' . $topic->topic . '</option>
            ';
        }
        echo $output;
    }

    public function validate_mobile($mobile) {
        return preg_match('/^[0-9]{10}+$/', $mobile);
    }
    public function store(Request $request) {
        $request->validate([
            'name'=>'required| min:3',
            'school_name'=>'required| min:3',
            'phone_no'=>'required',
            'email'=> 'required| min:3',
            'grade'=> 'required',
            'topic'=> 'required',
        ]);

        if(!$this->validate_mobile($request->get('phone_no'))) {
            return back()->with('success','Incorrect Phone Number');
        }
        $p= new Participant();
        $p->name= $request->get('name');
        $p->school= $request->get('school_name');
        $p->phone_no= $request->get('phone_no');
        $p->email= $request->get('email');
        $p->grade= $request->get('grade');
        $p->topic= $request->get('topic');
        $p->board= $request->get('board');

        if($p->save()){
            return back()->with('success','Registered successfully');
        }else{
            return back()->with('success','Unable to register at the moment');
        }

    }
}
