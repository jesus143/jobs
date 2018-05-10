<?php
return [
    'post' => [
        'new' => [
           'body' => 'Thank you for posting your job, you will get more applicants soon!',
           'title' => 'yohoo!'
        ],
        'draft' => [
          'body' => 'Job saved as draft, come back when your ready to post this job and accept applicants',
          'title' => 'Ohhhh.... I\' wait for yah',
        ],
        'update' => [
            'body' =>  'Your job as been updated, I like it!',
            'title' => 'Wow! you realized the best one'
         ],
        'deleted' => [
            'body' =>  'Your job :position as been deleted!',
            'title' => 'I am sorry to hear about that.'
         ]
    ],
    'job' => [
        'application' => [
            'hired' => [
                'body' => 'Applicant :name, successfully hired !',
                'title' => 'Oh yeahh!',
            ],
            'archived' => [
                'body' => 'Applicant :name, successfully added to archived!',
                'title' => 'See yoou later!',
            ],
            'applied' => [
                'body' => 'Successfully applied!',
                'title' => 'Thank you!',
            ],
        ],
        'invitation' => [
            'accept' => [
                'body' => 'Invitation successfully accepted!',
                'title' => 'Congrats!!',
            ],
            'reject' => [
                'body' => 'Invitation rejected :(',
                'title' => 'Oh no..',
            ]
        ],
        'bookmarked' => [
            'body' => 'Job successfully bookmarked',
            'title' => 'Congrats!',
        ]



    ]
];