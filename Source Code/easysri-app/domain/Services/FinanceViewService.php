<?php

namespace domain\Services;

use App\Models\Finance;

class FinanceViewService
{
    protected $finance;

    public function __construct()
    {
        $this->finance = new Finance();
    }

    public function all()
    {
        return $this->finance->all();
    }
}
