<?php

namespace App\Http\Controllers;

use App\Models\Motorcycle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MotorcycleResource;

class MotorcycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Motorcycle::with('line')->get();
        return response([ 'data' => MotorcycleResource::collection($data), 'message' => 'Retrieved successfully'], 200);
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
            'idline' => 'required|int|min:1',
            'label' => 'required|string|min:3|max:100|unique:ridergarage.lines',
            'code_revenol' => 'string|max:150'
        ]);

        $data = Motorcycle::create($data);
        return response([ 'data' => new MotorcycleResource($data), 'message' => 'Created successfully'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Motorcycle  $motorcycle
     * @return \Illuminate\Http\Response
     */
    public function show(Motorcycle $motorcycle)
    {
        return response([ 'data' => new MotorcycleResource($motorcycle), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Motorcycle  $motorcycle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motorcycle $motorcycle)
    {
        $motorcycle->update($request->all());
        return response([ 'data' => new MotorcycleResource($motorcycle), 'message' => 'Updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Motorcycle  $motorcycle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motorcycle $motorcycle)
    {
        $motorcycle->delete();
        return response(['message' => 'Deleted successfully'], 200);
    }
}
