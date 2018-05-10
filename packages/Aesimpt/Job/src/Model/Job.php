<?php

namespace Aesimpt\Job\Model;

use Illuminate\Database\Eloquent\Model;
use Auth;


use Aesimpt\Helper\Traits\FilterTraits as Filter;

class Job extends Model
{
    use Filter;

    protected $table = 'jobs';

    public function users()
    {
        return $this->belongsToMany('App\User')->using('Aesimpt\Job\Model\JobUser');
    }

    public function jobUsers()
    {
        return $this->hasMany('Aesimpt\Job\Model\JobUser', 'job_id', 'id');
    }

    public function owner()
    {
        return $this->belongsTo('App\User', 'employer_id', 'id');
    }

    public function applicant()
    {
        return $this;
    }

    public function totalApplicant()
    {
        return JobUser::where('job_id', $this->id)
            ->where('status', 'applied')
            ->count();
    }

    public function count()
    {
        return rand(0, 100);
    }

    public function expire()
    {
        return $this;
    }

    public function days()
    {
        return rand(0, 100);
    }

    public function getSkillsAttribute($value)
    {
        return json_decode($value, true);
    }

    public function print()
    {
        print "Test";
    }

    public function expiredAt( )
    {
        return 'October 15, 2016';
    }

    public function postAgo()
    {
        return '1 hour ago';
    }
}
