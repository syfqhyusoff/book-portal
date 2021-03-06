<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book_rating;
use App\book_items;
use App\book_genre;
use App\book_review;
use DB;
use Session;

class reviewCont extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {   

        $review = book_review::where('review_id','!=','3')
        ->where('user_id',Session::get('userid'))
        ->orderBy('review_date','desc')->get();
        $userreview = book_review::where('review_id','3')
        ->where('user_id',Session::get('userid'))
        ->get();

        
        return view('books.singlebook')
        ->with('userreview',$userreview)
        ->with('review',$review);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.singlebook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $id)
    {
        $this->validate($request,[
            'review'=>'required',
        ]);
        
        //create review
        $review = new book_review;
        
        $review->review = $request->input('review');
        $review->user_id = Session::get('userid');
        $review->book_id = $id;
        $review->timestamps = false;
        $review->save();

        return redirect()->action('reviewCont@show',$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booksingle = DB::table('book_items')
        ->leftjoin('book_publisher', 'book_items.publisher_id','=','book_publisher.publisher_id')
        ->where(['book_id'=>$id])
        ->first();
    
        $genre=DB::table('book_genre')
        ->leftjoin('book_category', 'book_genre.genre_id', '=', 'book_category.genre_id')
        ->where(['book_id'=>$id])
        ->first();
        
        
        $contributor = DB::table('book_contributor')
        ->leftjoin('book_author', 'book_contributor.author_id','=','book_author.author_id')
        ->where(['book_id'=>$id])
        ->get();
    
        $rating = book_rating::leftjoin('user_reader', 'book_rating.user_id','=','user_reader.user_id')
        ->where(['book_id'=>$id])
        ->where('book_rating.user_id',Session::get('userid'))
        ->first();
    
        $avgrating = book_rating::select(DB::raw('avg(rating) AS average'))
        ->leftjoin('user_reader', 'book_rating.user_id','=','user_reader.user_id')
        ->where(['book_id'=>$id])
        ->first();
    
        $reviews = book_review::leftjoin('user_reader', 'book_review.user_id','=','user_reader.user_id')
        ->leftjoin('book_rating', 'book_review.user_id','=','book_rating.user_id')
        ->where('book_review.user_id','!=',Session::get('userid'))
        ->where('book_id',$id)
        ->orderBy('review_date','desc')
        ->paginate(10);
        $userreviews = book_review::leftjoin('user_reader', 'book_review.user_id','=','user_reader.user_id')
        ->where('book_review.user_id',Session::get('userid'))
        ->where('book_review.book_id',$id)
        ->first();
        
        
        return view('books.singlebook') 
        ->with('book', $booksingle)
        ->with('authors',$contributor)
        ->with('ratings',$rating)
        ->with('avgratings',$avgrating)
        ->with('reviews',$reviews)
        ->with('userreviews',$userreviews)
        ->with('genre', $genre)
        ;
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            'review'=>'required',
        ]);
        
        if (book_review::where('book_id', '=', $id)
        ->where('user_id',Session::get('userid'))
        ->exists()) {

        //create review
        $review = new book_review;
        
        $review->review = $request->input('review');
        $review->user_id = Session::get('userid');
        $review->book_id = $id;
        $review->timestamps = false;
        $review->save();
        
        return redirect()->action('reviewCont@show',$id);
        }
        else{
            self::store($request,$id);
            
            return redirect()->action('reviewCont@show',$id);
        }
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
