<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class chatGPTController extends Controller
{
    public function askChat(Request $request)
    {
        try {
            $client = new Client();

            $response = $client->post('https://openrouter.ai/api/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('DEEP_SEEK'),
                    'Content-Type'  => 'application/json',
                ],
                'json' => [
                    'model' => 'deepseek/deepseek-chat:free',
                    'messages' => [
                        ['role' => 'system', 'content' => 'Eres un asistente útil.'],
                        ['role' => 'user', 'content' => $request->input('prompt')],
                    ],
                    'max_tokens' => 250,
                ],
            ]);

            // Decodificar la respuesta
            $body = json_decode($response->getBody(), true);

            // Extraer la respuesta generada por el modelo
            $answer = $body['choices'][0]['message']['content'];

            return response()->json(['answer' => $answer]);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al realizar la solicitud a la API de DeepSeek: ' . $e->getMessage()]);
        }
    }
}
