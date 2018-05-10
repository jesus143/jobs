<?php

namespace Aesimpt\Job\Traits;
 
trait JobUserTrait
{
    //    public function jobUser()
    //    {
    //        return $this->hasMany('Aesimpt\Job\Model\JobUser', 'job_id', 'id');
    //    }

    //    public function subscription()
    //    {
    //        return $this->hasMany(
    //            'Aesimpt\UserSubscription\Model\Subscription',
    //            'user_id',
    //            'id'
    //        );
    //    }

    public function myJobs()
    {
        return $this->hasMany('Aesimpt\Job\Model\JobUser', 'job_seeker_id', 'id');
    }

}