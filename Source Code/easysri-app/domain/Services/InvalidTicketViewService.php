<?php

namespace domain\Services;

use App\Models\InvalidTicket;

class InvalidTicketViewService 
{
    protected $ticket;

    public function __construct()
    {
        $this->ticket = new InvalidTicket();
    }

    public function all()
    {
        return $this->ticket->all();
    }

}
