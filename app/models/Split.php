<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Split extends BaseSplit
{
    public function getSolnWt()
    {
        return $this->wt_split_bkr_icp - $this->wt_split_bkr_tare;
    }

    public function getSplitWt()
    {
        return $this->wt_split_bkr_split - $this->wt_split_bkr_tare;
    }
}
