<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $perPage = $request->input('limit') ? $request->input('limit') : 15; // User input

        $db = env("DB_CONNECTION");

        $sel = $db == "mysql" ? 'COUNT(*) as cnt, max(CUST_NAME) as name' : 'COUNT(*) as cnt, max("CUST_NAME") as name';

        $Order = Order::selectRaw($sel)->groupBy('CUST_CODE')->get();//->paginate($perPage);

        $rep = ["db" => $db, "data" => $Order];
        return response()->json($rep);

    }


    public function paginated(Request $request)
    {
        $db = env("DB_CONNECTION");

        $perPage = $request->input('limit') ? $request->input('limit') : 15; // User input

        $Order = Order::paginate($perPage);

        $rep = ["db" => $db, "data" => $Order];

        return response()->json($rep );

    }


    public function withJoins(Request $request)
    {
        $db = env("DB_CONNECTION");

        $perPage = $request->input('limit') ? $request->input('limit') : 15; // User input

        $Order = Order::leftJoin('customers', function($join) {
            $join->on('customers.id', '=', 'orders.CUST_CODE');
        })->leftJoin('agents', function($join) {
            $join->on('agents.id', '=', 'orders.AGENT_CODE');
        })->paginate($perPage);

        $rep = ["db" => $db, "data" => $Order];

        return response()->json($rep );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
