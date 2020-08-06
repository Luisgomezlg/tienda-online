<?php
return array(
    // set your paypal credential
    'client_id' => 'ARlWAogWsGwlTj6FZmATx81FAw9qKaILb4qUV8gFaKmTkTQ7Cj-Np87jcy39sm6OS_D4S_7xWUmZTe8n',
    'secret' => 'EPTAvpd8vrfApiMDdiNI41636iCoewJm4M9OAUx5eviMLy78gSDWQoCkq2qE6kszn2p0rDwtMxsB8LZP',
    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);
