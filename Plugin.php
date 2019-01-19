<?php

    namespace Tivet\Plugin;

    use Tivet\Plugin\Traits\Configure;

    abstract class Plugin
    {
        use Configure;

        public function run(\TeamSpeak3_Node_Server $server, \TeamSpeak3_Node_Host $instance)
        {

        }
    }