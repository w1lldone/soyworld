<?php

namespace App\Repositories;

use App\Transaction;

/**
* Reports repository
*/
class ReportsRepository
{
    protected $models = [];

    public function getFarmersReports($request)
    {
        $farmers = auth()->user()->poktan->user()->orderBy('name')->get();

        if ($request->has('year')) {
            $farmers = $farmers->load(['harvest' => function ($query) use ($request)
            {
                $query->whereYear('harvested_at', $request->year);
            }]);
        }

        return $farmers;
    }

    public function getSalesReport($request)
    {
        if ($request->has('year')) {
            foreach ($this->getMonths() as $key => $value) {
                $sales[$value] = $this->getModel()
                                ->transaction()
                                ->whereYear('created_at', $request->year)
                                ->where('status_id', 3)
                                ->whereMonth('created_at', $key)
                                ->get()
                                ->sum('total_quantity');
            }
        } else {
            foreach ($this->getYears() as $year) {
                $sales[$year] = $this->getModel()
                                ->transaction()
                                ->whereYear('created_at', $year)
                                ->where('status_id', 3)
                                ->get()
                                ->sum('total_quantity');
            }
        }
        
        $sales = collect($sales);

        return $sales;
    }

    public function getOnfarmsReport($request)
    {
        if ($request->has('year')) {
            foreach ($this->getMonths() as $key => $value) {
                $onfarms[$value] = $this->getModel()
                                ->onfarm()
                                ->whereYear('planted_at', $request->year)
                                ->whereMonth('planted_at', $key)
                                ->get()
                                ->load('seed')
                                ->pluck('seed')
                                ->sum('quantity');
            }
        } else {
            foreach ($this->getYears() as $year) {
                $onfarms[$year] = $this->getModel()
                                ->onfarm()
                                ->whereYear('planted_at', $year)
                                ->get()
                                ->load('seed')
                                ->pluck('seed')
                                ->sum('quantity');
            }
        }

        return collect($onfarms);
        
    }

    public function getHarvestsReport($request)
    {
        if ($request->has('year')) {
            foreach ($this->getMonths() as $key => $value) {
                $harvest = $this->getModel()
                                ->onfarm()
                                ->whereHas('harvest', function ($query) use ($key, $request)
                                {
                                    $query->whereYear('harvested_at', $request->year)
                                        ->whereMonth('harvested_at', $key);
                                })
                                ->get()
                                ->pluck('harvest')
                                ->sum('initial_stock');

                $harvests[$value] = ceil($harvest);
            }
        } else {
            foreach ($this->getYears() as $year) {
                $harvest = $this->getModel()
                                ->onfarm()
                                ->whereHas('harvest', function ($query) use ($year)
                                {
                                    $query->whereYear('harvested_at', $year);
                                })
                                ->get()
                                ->pluck('harvest')
                                ->sum('initial_stock');

                $harvests[$year] = ceil($harvest);
            }
        }

        return collect($harvests);
    }

    public function getAllSales($request)
    {
        $transaction = new Transaction;

        if ($request->has('year')) {
            foreach ($this->getMonths() as $key => $value) {
                $sales[$value] = $transaction->whereYear('created_at', $request->year)
                                ->where('status_id', 3)
                                ->whereMonth('created_at', $key)
                                ->get()
                                ->sum('total_quantity');
            }
        } else {
            foreach ($this->getYears() as $year) {
                $sales[$year] = $transaction->whereYear('created_at', $year)
                                ->where('status_id', 3)
                                ->get()
                                ->sum('total_quantity');
            }
        }

        return collect($sales);
    }

    public function getModel()
    {
        if (auth()->user()->isPoktanLeader()) {
            return auth()->user()->poktan;
        } 

        if(auth()->user()->hasRole('petani')) {
            return auth()->user();
        }
    }

    public function getMonths()
    {
        return [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember'
        ];
    }

    public function getYears()
    {
        return collect(range(2016, date('Y')));
    }
}
