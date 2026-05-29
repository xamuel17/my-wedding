<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class DonationApiController extends Controller
{
    /**
     * GET /api/donations
     * Returns the 20 most recent donations.
     */
    public function index(): JsonResponse
    {
        $donations = Donation::query()
            ->orderByDesc('created_at')
            ->limit(20)
            ->get(['id', 'name', 'amount', 'message', 'created_at']);

        return response()->json([
            'success' => true,
            'count' => $donations->count(),
            'data' => $donations,
        ]);
    }

    /**
     * POST /api/donations
     * Creates a new donation.
     */
    public function store(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'amount' => 'required|numeric|min:1',
                'message' => 'nullable|string|max:500',
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed.',
                'errors' => $e->errors(),
            ], 422);
        }

        $donation = Donation::create([
            'name' => $validated['name'],
            'amount' => $validated['amount'],
            'message' => $validated['message'] ?? null,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Donation created successfully.',
            'data' => [
                'id' => $donation->id,
                'name' => $donation->name,
                'amount' => $donation->amount,
                'message' => $donation->message,
                'created_at' => $donation->created_at,
            ],
        ], 201);
    }
}
