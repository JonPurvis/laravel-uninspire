<?php

declare(strict_types=1);

it('registers the uninspire command', function () {
    $this->artisan('list')
        ->expectsOutputToContain('uninspire')
        ->assertSuccessful();
});

it('runs successfully', function () {
    $this->artisan('uninspire')
        ->assertSuccessful();
});
