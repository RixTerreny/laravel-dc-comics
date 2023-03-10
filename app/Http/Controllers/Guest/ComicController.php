<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics=Comic::all();
        return view("comics.index",compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "title"=>"required|min:5|max:255",
            "description"=>"required|string",
            "thumb"=>"required|url|string",
            "price"=>"required|numeric",
            "series"=>"required",
            "sale_date"=>"required",
            "created_at"=>"required",
        ]);
        // $data= $request->all();

        $comic = new Comic();
        $comic ->title = $data["title"];
        $comic ->description = $data["description"];
        $comic ->thumb = $data["thumb"];
        $comic ->price = (float) $data["price"];
        $comic ->series = $data["series"];
        $comic ->sale_date = $data["sale_date"];
        $comic ->type = json_encode("fghr");
        $comic ->created_at = $data["created_at"];
        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic= Comic::findOrFail($id);
        return view("comics.show",compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic= Comic::find($id);

        if(!$comic){
            abort(404,"non disponibile");
        }else{
            return view("comics.edit", compact("comic"));
        }
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
        
        $data = $request->all();
        $comic = Comic::findOrFail($id);

        $comic ->title = $data["title"];
        $comic ->description = $data["description"];
        $comic ->thumb = $data["thumb"];
        $comic ->price = (float) $data["price"];
        $comic ->series = $data["series"];
        $comic ->sale_date = $data["sale_date"];
        $comic ->type = json_encode("changed");
        $comic ->created_at = $data["created_at"];
        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
