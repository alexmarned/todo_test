<?php

return array(
    'users' => 'users/index',
    'test' => 'test/index',
    'news/([0-9]+)' => 'news/view/$1',
    'news' => 'news/index',
    'tasks' => 'task/index',
    'create_task' => 'task/create',
    'edit_task/([0-9]+)' => 'task/edit/$1',
    'task_update' => 'task/update',
    ' 22' => 'main/index',
    'task_store' => 'task/store',
    //  'task_destroy/([0-9]+)'=>'task/destroy/$id',
    'task_destroy/([0-9]+)' => 'task/destroy/$1'
);
