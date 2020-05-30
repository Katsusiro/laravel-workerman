<?php

return [

    /**
     * Listen port for SocketIO client.
     */
    'server' => [
		'port' => 3000,
	],
	
	/**
	 * Events dispatched when SocketIO server is running.
	 */
	'events' => [
		App\Events\SendChatMessage::class,
	],

	'use_ssl' => false,

	'ssl' => [
        'local_cert'  => '/your/path/of/server.pem',
        'local_pk'    => '/your/path/of/server.key',
        'verify_peer' => false
	]
];
