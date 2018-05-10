<?php
/**
 * Created by PhpStorm.
 * User: jesus143
 * Date: 4/19/2018
 * Time: 10:40 PM
 */

namespace Aesimpt\Helper\Traits;


Trait FilterTraits
{
    /**
     *
     * Extension of query eloquent
     * can be accessed like so $jobs->filter()
     * @param $query
     * @param $input
     * @return mixed
     */
    public function scopeFilter($query, $input, $key = 'type')
    {
        if($key == 'type') {
            if (optional($input)->type !== 'All' and !empty($input->type)) {
                return $query->where('type', $input->type);
            }
        } else if ($key == 'name') {
            if (optional($input)->search !== 'All' and !empty($input->search)) {
                return $query->where('name', 'like', '%' . $input->search . '%');
            }
        } else if ($key == 'category') {
            if (optional($input)->category !== 'All' and !empty($input->category)) {
                return $query->where('category', $input->category);
            }
        }
    }
  }