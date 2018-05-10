<?php

namespace Aesimpt\Job\Traits;

trait JobTrait
{
    /**
     * You work with specific job
     * @return mixed
     */
    //        public function myJobs()
    //        {
    //            return $this->belongsToMany(
    //                'Aesimpt\Job\Model\Job',
    //                'job_users',
    //                'job_seeker_id',
    //                'job_id')->withTimestamps();
    //        }

    /**
     * The jobs that you posted
     * @return mixed
     */
    public function myPostedJobs()
    {
        return $this->hasMany('Aesimpt\Job\Model\Job', 'employer_id', 'id');
    }

}