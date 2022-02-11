<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rent;
use App\Models\Member;
use App\Models\Book;
use Carbon\Carbon;
use DB;

class RentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $rents=Rent::all();
       
        return view('rents.index')->with('rents',$rents);
    }
    public function search(Request $request)
    {
        $search=$request->input('search');
        if ($search!=null) {
            $rents=Rent::query()
            ->select('rents.*')
            ->leftJoin('books', 'rents.isbn', '=', 'books.id')
            ->Where('title','like','%'.$search.'%')
            ->orWhere('start','=',$search)
            ->orWhere('end','=',$search)
            ->get();
        } else {
            $rents = Rent::all();
        }
        return view('rents.index')->with('rents',$rents);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members=Member::orderBy('name')->get();
        $members=$members->pluck('infos','id');

      
       $books=DB::table('books')
       ->leftJoin('rents', 'books.id', '=', 'rents.isbn')
       ->select(DB::raw('CONCAT(title, " - " ,author) as infos,books.id,storage-count(active) as available,description,rentable '))
       ->groupBy('books.id')
       ->havingRaw('available>0 and rentable=1')
       ->orderBy('infos')
       ->get();
        $books=$books->pluck('infos','id');

        $data = [
            'members'  => $members,
            'books'    =>$books
        ];
        return view('rents.create')->with($data);
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
            'renter_id'=>'required',
            'book_id'=>'required'
        ]);
        $member=Member::find($request->renter_id);
        //dd($member);
        
        if($member->rent)
            {
                $date = Carbon::now();
                $rent=new Rent;
                $rent->isbn=$request->book_id;
                $rent->user_id=$request->renter_id;
                $rent->start=$date->toDateString();
                switch ($member->type) {
                    case 1:
                        $date->addDays(60);
                        break;
                    case 2:
                        $date->addDays(365);
                        break;
                    case 3:
                        $date->addDays(30);
                        break;
                    case 4:
                        $date->addDays(12);
                        break;
                }
                $rent->end=$date->toDateString();
                $rent->active=1;
                $rent->save();
                return redirect('/rents')->with('success','Kölcsönzés hozzáadva');
            }
            else
            {
                $errors=[];
                array_push($errors,"A tag átlépte a limitet. Ez így nem szabályos.");           
                return redirect('/rents')->with('errors',$errors);
            }
        
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rent=Rent::find($id);

        $datas = [
            'rent'=>$rent,
            'data'=>
            [
            "1"=>"Aktív",
            "0"=>"Nem aktív"
            ]
        ];
        return view('rents.edit')->with($datas);
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
            'start'=>'required',
            'end'=>'required',
            'active'=>'required'
        ]);

        $rent=Rent::find($id);
        $rent->start=$request->input('start');
        $rent->end=$request->input('end');
        $rent->active=$request->input('active');
        $rent->save();

        return redirect('/rents')->with('success','Kölcsönzés frissitve');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
