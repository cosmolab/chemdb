<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class AlcheckAnalysis extends BaseAlcheckAnalysis
{
    public function getMassQtz()
    {
        return $this->wt_bkr_sample - $this->wt_bkr_tare;
    }

    public function getMassSoln()
    {
        return $this->wt_bkr_soln - $this->wt_bkr_tare;
    }
}
