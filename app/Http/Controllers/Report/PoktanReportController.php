<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Repositories\ReportsRepository as Repository;
use Illuminate\Http\Request;

class PoktanReportController extends Controller
{
    function __construct(Repository $repository)
    {
        $this->middleware(['auth', 'role:poktanLeader']);
        $this->repository = $repository;
    }

    public function index()
    {
        return redirect(route('report.poktan.farmer'));
    }

    public function farmer(Request $request)
    {
        $years = $this->repository->getYears();
        $farmers = $this->repository->getFarmersReports($request);

        return view('report.poktan.farmer', compact('farmers', 'years'));
    }

    public function sales(Request $request)
    {
        $years = $this->repository->getYears();

        $sales = $this->repository->getSalesReport($request, $years);

        return view('report.poktan.sales', compact('sales', 'years'));
    }

    public function soybean(Request $request)
    {
        $years = $this->repository->getYears();

        $onfarms = $this->repository->getOnfarmsReport($request);
        $harvests = $this->repository->getHarvestsReport($request);

        return view('report.poktan.soybean', compact('onfarms', 'harvests', 'years'));
    }
}
