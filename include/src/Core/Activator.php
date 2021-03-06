<?php

namespace Boilerplate\Core;

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @package Boilerplate
 * @author Your Name <email@example.com>
 */
class Activator
{
    /**
     * Method running for activating plugin
     *
     * @return void
     */
    public static function activate()
    {
        $instance = new self();
    }
}
