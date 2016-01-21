<?php

namespace Celary\Component\Garage;

abstract class SafeCar
{
    public function drive($distance)
    {
        if (!$this->seatbeltsFasten()) {
            throw new \Exception("can't run");
        }

        $this->start();
        $this->go();
        $this->park();
    }

    protected function seatbeltsFasten()
    {
        return true;
    }

    protected function start()
    {
        return;
    }

    protected function park()
    {
        return;
    }

    abstract protected function go();

}