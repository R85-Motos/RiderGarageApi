<?php

namespace App\Http\Controllers;

use App\Models\Line;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\LineResource;

class LineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lines = Line::with('brand')->get();
        return response([ 'data' => LineResource::collection($lines), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'idbrand' => 'required|int|min:1',
            'label' => 'required|string|min:3|max:100|unique:ridergarage.lines',
            'code_revenol' => 'string|max:150'
        ]);

        $line = Line::create($data);
        return response([ 'data' => new LineResource($line), 'message' => 'Created successfully'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Line  $line
     * @return \Illuminate\Http\Response
     */
    public function show(Line $line)
    {
        return response([ 'data' => new LineResource($line), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Line  $line
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Line $line)
    {
        $line->update($request->all());
        return response([ 'data' => new LineResource($line), 'message' => 'Updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Line  $line
     * @return \Illuminate\Http\Response
     */
    public function destroy(Line $line)
    {
        $line->delete();
        return response(['message' => 'Deleted successfully'], 200);
    }
}
