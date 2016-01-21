<?php

namespace Celary\Component\Race;

interface Engine
{
    public function start();
    public function hp();
    public function stop();
}