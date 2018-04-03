<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Repositories\ReportsRepository as Repository;
use Illuminate\Http\Request;

class AdminReportController extends Controller
{
    function __construct(Repository $repository)
    {
        $this->repository = $repository;
        $this->middleware(['auth', 'role:admin']);
    }

    public function index()
    {
        return redirect()->route('report.admin.sales');
    }

    public function sales(Request $request)
    {
        $years = $this->repository->getYears();

        $sales = $this->repository->getAllSales($request);

        return view('report.admin.sales', compact('sales', 'years'));
    }
}
