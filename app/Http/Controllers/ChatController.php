<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller {
    public function chat(Request $request) {
        $request->validate(['message' => 'required|string']);
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                'Content-Type'  => 'application/json',
            ])->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'system', 'content' => 'Eres un asistente útil.'],
                    ['role' => 'user', 'content' => $request->message],
                ],
                'max_tokens' => 150,
            ]);

            return response()->json($response->json());
        } catch (\Exception $e) {
            Log::error('Error en ChatController:', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'No se pudo procesar la solicitud'], 500);
        }
    }
}
