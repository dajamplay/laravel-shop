<?php

namespace App\Livewire;

use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Closure;

trait ThrottlingTrait
{
    protected function getThrottlingKey(): string
    {
        $fn = debug_backtrace()[1]['function'];
        $id = Auth::check() ? Auth::id() : Request::ip();

        return static::class.'|'.$fn.'|'.$id;
    }

    /**
     * @throws ValidationException
     */
    protected function rateLimit(int $maxAttempts, Closure $callback = null, int $decaySeconds = 60): void
    {
        $key = $this->getThrottlingKey();

        if (RateLimiter::tooManyAttempts($key, $maxAttempts)) {
            $secondsUntilAvailable = RateLimiter::availableIn($key);

            if ($callback) $callback($secondsUntilAvailable);

            throw ValidationException::withMessages([
                'throttle' => __('Too many requests, try again in :sec seconds.', ['sec' => $secondsUntilAvailable])
            ]);
        }

        RateLimiter::hit($key, $decaySeconds);
    }

    protected function clearRateLimit(): void
    {
        $key = $this->getThrottlingKey();
        RateLimiter::clear($key);
    }
}
