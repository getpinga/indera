<?php
/**
 * Indera Registrar System
 *
 * Written in 2023 by Taras Kondratyuk (https://getpinga.com)
 *
 * @license MIT
 */

$config = array(
    'db' => array(
        'host' => getenv('DB_HOST'),
        'username' => getenv('DB_USERNAME'),
        'password' => getenv('DB_PASSWORD'),
        'dbname' => getenv('DB_NAME'),
    ),
    'email' => array(
        'from' => 'no-reply@example.com',
        'reply-to' => 'support@example.com',
        'sender' => 'no-reply@example.com',
        'return-path' => 'no-reply@example.com',
        'subject' => 'Domain Expiration Notice',
        'message' => "Dear Registrant,\n\nThis is a reminder that your domain %s is set to expire on %s. We recommend renewing your domain to avoid any disruptions to your services.\n\nPlease log in to your account and renew your domain or contact our support team for assistance.\n\nBest Regards,\nDomain Registrar Team",
    ),
);
