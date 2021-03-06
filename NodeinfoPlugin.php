<?php

if (!defined('GNUSOCIAL')) {
    exit(1);
}

class NodeinfoPlugin extends Plugin
{
    const VERSION = '0.0.1';

    function onRouterInitialized($m)
    {
        $m->connect(
            '.well-known/nodeinfo', array(
                    'action' => 'nodeinfojrd'
                )
        );

        $m->connect(
            'main/nodeinfo/2.0', array(
                    'action' => 'nodeinfo_2_0'
                )
        );

        return true;
    }

    function onPluginVersion(array &$versions)
    {
        $versions[] = array('name' => 'Nodeinfo',
                            'version' => self::VERSION,
                            'author' => 'chimo',
                            'homepage' => 'https://github.com/chimo/gs-nodeinfo',
                            'description' =>
                            // TRANS: Plugin description.
                            _m('')); // TODO
        return true;
    }
}

