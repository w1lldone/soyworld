<?php

namespace App\Http\Controllers\Report;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PoktanReportController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return redirect(route('report.poktan.farmer'));
    }

    public function farmer(Request $request)
    {
        $years = collect(range(2016, date('Y')))->reverse();
        $farmers = auth()->user()->poktan->user()->orderBy('name')->get();

        if ($request->has('year')) {
            $farmers = $farmers->load(['harvest' => function ($query) use ($request)
            {
                $query->whereYear('harvested_at', $request->year);
            }]);
        }

        return view('report.poktan.farmer', compact('farmers', 'years'));
    }

    public function sales(Request $request)
    {
        $year = $request->year ?: date('Y');

        foreach (range(0, 12) as $month) {
            $sales[$month] = auth()
                            ->user()
                            ->poktan
                            ->transaction()
                            ->whereYear('created_at', $year)
                            ->where('status_id', 3)
                            ->whereMonth('created_at', $month)
                            ->get()
                            ->sum('total_quantity');
        }

        $sales = collect($sales);

        return view('report.poktan.sales', compact('sales'));
    }
}
