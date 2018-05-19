<?php

namespace LzoMedia\Groups\Traits;

use LzoMedia\Groups\Models\Report;

trait Reporting
{
    /**
     * @method report
     * @param $user_id
     */
    public function report($user_id)
    {
        $report = new Report(['user_id' => $user_id]);

        $this->reports()->save($report);
    }

    /**
     * @removeReport
     * @param $user_id
     */
    public function removeReport($user_id)
    {
        $this->reports()->where('user_id', $user_id)->delete();
    }

    /**
     * @method toggleReport
     * @param $user_id
     */
    public function toggleReport($user_id)
    {

        if ($this->isReported($user_id)) {

            return $this->removeReport($user_id);

        }

        $this->report($user_id);

    }

    /**
     * @method isReported
     * @param $user_id
     * @return bool
     */
    public function isReported($user_id)
    {
        return !!$this->reports()
            ->where('user_id', $user_id)
            ->count();
    }

    /**
     * method getReportsCountAttribute
     * @return mixed
     */
    public function getReportsCountAttribute()
    {
        return $this->reports()->count();
    }
}
