<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Poster;
use App\Http\Controllers\ImageController;

class PostersController extends Controller
{
	public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'lat' => 'required|numeric',
            'lon' => 'required|numeric',
            'message' => 'required|string|max:255',
        ]);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *@return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.poster');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$data = [
    		'lat' => $request->input('lat'),
            'lon' => $request->input('lon'),
            'message' => $request->input('msg'),
            'user_id' => auth()->user()->id,
    	];
  
    	if ($this->validator($data)->fails()) {
		   return response()->json($this->validator($data)->errors(), 412);
		}
		
		$poster = Poster::create($data);
		if ($poster->id) {
			$file = $request->file('file');
			$image = new ImageController;
			$image->addImages($file, $poster->id, 'App\Poster');
		}
		
		return  $poster;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $posters = Poster::select('id','message','lat','lon', 'user_id')->get();
        foreach ($posters as $k=>$post) {
			$images = $post->images;
			$user = $post->user;
		}

        return response()->json($posters, 200);
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
        //
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
