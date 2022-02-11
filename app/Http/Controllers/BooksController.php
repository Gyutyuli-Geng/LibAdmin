<?php

namespace App\Http\Controllers;
use App\Models\Book;



use Illuminate\Http\Request;




class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books=Book::OrderBy('title')->paginate(6);
        return view('books.index')->with('books',$books);
    }

    public function search(Request $request)
    {
        $search=$request->input('search');
        if ($search!=null) {
            $books=Book::query()
            ->where('author','like','%'.$search.'%')
            ->orwhere('title','like','%'.$search.'%')
            ->orwhere('id','=',$search)
            ->get();
            
        return view('books.result')->with('books',$books);
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
            "0"=>"Nem",
            "1"=>"Igen"
            ]
        ];
        return view('books.create')->with($data);
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
            'author'=>'required',
            'title'=>'required',
            'publisher'=>'required',
            'year'=>'required',
            'id'=>'required',
            'storage'=>'required',
            'rentable'=>'required'
        ]);
        
        $book=new Book;
        $book->author=$request->input('author');
        $book->title=$request->input('title');
        $book->publisher=$request->input('publisher');
        $book->year=$request->input('year');
        $book->id=$request->input('id');
        $book->storage=$request->input('storage');
        $book->rentable=$request->input('rentable');
        $book->save();
        return redirect('/books')->with('success','Könyv hozzáadva');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book=Book::find($id);
        return view('books.show')->with('book',$book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book=Book::find($id);

        $datas = [
            'book'=>$book,
            'data'=>
            [
            "0"=>"Nem",
            "1"=>"Igen"
            ]
        ];

        return view('books.edit')->with($datas);
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
            'author'=>'required',
            'title'=>'required',
            'publisher'=>'required',
            'year'=>'required',
            'id'=>'required',
            'storage'=>'required',
            'rentable'=>'required'
        ]);
            $book=Book::find($id);
            $book->author=$request->input('author');
            $book->title=$request->input('title');
            $book->publisher=$request->input('publisher');
            $book->year=$request->input('year');
            $book->id=$request->input('id');
            $book->storage=$request->input('storage');
            $book->rentable=$request->input('rentable');
        if(!($request->storage<$book->rentedcount))
        {
            $book->save();
    
            return redirect('/books')->with('success','Könyv frissitve');
        }
        else
        {
            $errors=[];
                array_push($errors,"A könyv raktármennyiségi nem lehet kisebb mint amennyi kölcsönbe van adva. Ez így nem szabályos.");           
                return redirect('/books')->with('errors',$errors);
        }
        return redirect('/books')->with('success','Könyv frissitve');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book=Book::find($id);

        if(!($book->rentedcount>0))
        {
            $book->delete();            
            return redirect('/books')->with('success','Könyv törölve');
        }
        else
        {            
            $errors=[];
            array_push($errors,"A könyv nem törölhető mert épp aktív kölcsönbe van adva. Ez így nem szabályos.");           
            return redirect('/books')->with('errors',$errors);
        }

        
        
    }
}
