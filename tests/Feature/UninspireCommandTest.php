<?php

declare(strict_types=1);

it('registers the uninspire command', function (): void {
    $this->artisan('list')
        ->expectsOutputToContain('uninspire')
        ->assertSuccessful();
});

it('runs successfully', function (): void {
    $this->artisan('uninspire')
        ->assertSuccessful();
});
