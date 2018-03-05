<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Repositories\ReportsRepository as Repository;
use Illuminate\Http\Request;

class FarmerReportController extends Controller
{
    function __construct(Repository $repository)
    {
        $this->repository = $repository;
        $this->middleware(['auth', 'role:petani']);
    }

    public function index(Request $request)
    {
        return redirect(route('report.farmer.soybean'));
    }

    public function soybean(Request $request)
    {
        $years = $this->repository->getYears();

        $onfarms = $this->repository->getOnfarmsReport($request);
        $harvests = $this->repository->getHarvestsReport($request);

        return view('report.farmer.soybean', compact('onfarms', 'harvests', 'years'));
    }

    public function sales(Request $request)
    {
        $years = $this->repository->getYears();

        $sales = $this->repository->getSalesReport($request, $years);

        return view('report.farmer.sales', compact('sales', 'years'));
    }
}
