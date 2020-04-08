<?php

return [
    // themeの設定
    'theme' => [
        // https://getbootstrap.com/docs/4.0/utilities/colors/#background-color
        'bg-color' => 'bg-gradient-primary',
        // https://fontawesome.com/icons/
        'bland' => 'fas fa-user-astronaut'
    ],
    // サイドバーのリンク指定
    'links' => [
        'DashBoard' => [
            // https://fontawesome.com/icons/
            'icon' => 'fas fa-home',
            // route('name')のname部分を指定
            'to' => '' //dashboard
        ],
        'Task Schedule' => [
            // https://fontawesome.com/icons/
            'icon' => 'fas fa-tasks',
            // route('name')のname部分を指定
            'to' => '' //task
        ]
    ]

];
