<?php


$gearman_config = array(
	'GearmanManager' => array(
		'worker_dir' => APPPATH .'classes/Service/Message/Email/Worker',
		'include' => '*',
		'count' => 10,
		'dedicated_count' => 1,
		'max_worker_lifetime' => 3600,
		'auto_update' => 1,
	),
    "workers" => array(

        "Sender" => array(

            "count" => 5

        )
    )
);