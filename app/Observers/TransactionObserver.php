<?php

namespace App\Observers;

use App\Transaction;
use App\User;

/**
* Transaction observer
*/
class TransactionObserver
{
    public function created(Transaction $transaction)
    {
        // send notification to farmers
        foreach ($transaction->transaction_detail as $detail) {
            $user = $detail->harvest->onfarm->user;
            $user->notify(new \App\Notifications\SoybeanSold($detail));
        }

        // send notification to Administrator
        User::whereHas('privilage', function ($query)
        {
            $query->where('is_superadmin', true);
        })->first()->notify(new \App\Notifications\NewTransaction($transaction));
    }
}
