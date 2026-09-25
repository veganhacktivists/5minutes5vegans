<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class HealthController extends Controller
{
    /**
     * For uptime monitors and Coolify's health check: the app is running and
     * can reach its database. Failures aren't reported, since a monitor asks
     * every few seconds and the cause shows up elsewhere.
     */
    public function __invoke(): JsonResponse
    {
        try {
            DB::connection()->getPdo();
        } catch (\Throwable) {
            return $this->status('down', 503);
        }

        return $this->status('up', 200);
    }

    private function status(string $status, int $code): JsonResponse
    {
        return response()->json(['status' => $status], $code)->header('Cache-Control', 'no-store');
    }
}
