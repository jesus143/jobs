<?php

namespace Aesimpt\Job\Model;

use Illuminate\Database\Eloquent\Model;

class JobUser extends Model
{
    protected $table = 'job_users';

    public function job()
    {
        return $this->belongsTo('Aesimpt\Job\Model\Job', 'job_id', 'id');
    }

    public function jobseeker()
    {
        return $this->belongsTo('App\User', 'job_seeker_id', 'id');
    }

    public function skill()
    {
        return 'Karpenter';
    }

    public function rating()
    {
        return rand(10,100);
    }

    public function totalRating()
    {
        return rand(1,4) . '.' . rand(0,5);
    }

    public function totalReview()
    {
        return "(" . rand(1,5) . " reviews)";
    }

    public function message() {
        return 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
                    <p>Best Regards,<br>Raffy';
    }


}
