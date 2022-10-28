<?php

namespace domain\Services;

use App\Models\BusTimeTable;
class BusTimeViewService
{
    protected $bus;

    public function __construct()
    {
        $this->bus = new BusTimeTable();
    }

    public function all()
    {
        return $this->bus->all();
    }

    public function get($bus_id)
    {
        return $this->bus->find($bus_id);
    }

    public function allActive()
    {
        return $this->bus->allActive();
    }

    public function delete($bus_id)
    {
        $bus = $this->bus->find($bus_id);
        $bus->delete();
    }

    public function done($bus_id)
    {
        $bus = $this->bus->find($bus_id);
        if ($bus->done == 0) {
            $bus->done = 1;
            $bus->update();
        } else {
            $bus->done = 0;
            $bus->update();
        }
    }

    public function update(array $data, $bus_id)
    {
        $bus = $this->bus->find($bus_id);
        $bus->update($this->edit($bus, $data));
    }

    protected function edit(BusTimeTable $bus, $data)
    {
        return array_merge($bus->toArray(),  $data);
    }
}
