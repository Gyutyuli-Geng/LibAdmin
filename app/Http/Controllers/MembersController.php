<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Rent;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $members=Member::all();
       
        return view('members.index')->with('members',$members);
    }
    public function search(Request $request)
    {
        $search=$request->input('search');
        if ($search!=null) {
            $members=Member::query()
            ->where('name','like','%'.$search.'%')
            ->orwhere('address','like','%'.$search.'%')
            ->get();
            return view('members.index')->with('members',$members);
        } else {
            $members=Member::all();
       
            return view('members.index')->with('members',$members);  
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'data'=>
            [
            "1"=>"Egyetemi hallgató",
            "2"=>"Egyetemi oktató",
            "3"=>"Egyetemi hallgató (Máshonnan)",
            "4"=>"Tag"
            ]
        ];

        return view('members.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'address'=>'required',
            'type'=>'required',
            'phone'=>'required',
            'email'=>'required'
        ]);
        $member=new Member;
        $member->name=$request->input('name');
        $member->address=$request->input('address');
        $member->type=$request->input('type');
        $member->phone=$request->input('phone');
        $member->email=$request->input('email');
        $member->save();

        return redirect('/members')->with('success','Tag hozzáadva');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member=Member::find($id);
        $old=Rent::query()
        ->where('user_id','=',$id)
        ->where('active','=',0)
        ->get();
        $current=Rent::query()
        ->where('user_id','=',$id)
        ->where('active','=',1)
        ->get();

        $data = [
            'member'  => $member,
            'old'   => $old,
            'current' => $current
        ];
        return view('members.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member=Member::find($id);
        $datas = [
            'member'=>$member,
            'data'=>
            [
            "1"=>"Egyetemi hallgató",
            "2"=>"Egyetemi oktató",
            "3"=>"Egyetemi hallgató (Máshonnan)",
            "4"=>"Tag"
            ]
        ];
        //dd($datas);
        return view('members.edit')->with($datas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'address'=>'required',
            'type'=>'required',
            'phone'=>'required',
            'email'=>'required'
        ]);

        $member=Member::find($id);
        $member->name=$request->input('name');
        $member->address=$request->input('address');
        $member->type=$request->input('type');
        $member->phone=$request->input('phone');
        $member->email=$request->input('email');
        $member->save();

        return redirect('/members')->with('success','Tag frissitve');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member=Member::find($id);
        $member->delete();
        return redirect('/members')->with('success','Tag törölve');
    }
}
