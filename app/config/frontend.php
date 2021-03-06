<?php

return [
    'url' => env('RONTEND_URL', 'http://localhost:3000'),
    'reset_pass_url' => env('RESET_PASS_URL', '/reset?token='),
    'email_verify_url' => env('FRONTEND_EMAIL_VERIFY_URL', '/verify?queryUrl='),
];
