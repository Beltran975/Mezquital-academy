<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

class NewsService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client([
            'verify' => false, 
        ]);
        
        $this->apiKey = config('services.newsapi.key');
    }

    /**
     * Obtiene noticias de ciberseguridad con filtros avanzados.
     *
     * @param string $query Términos de búsqueda.
     * @param string|null $from Fecha de inicio (formato YYYY-MM-DD).
     * @param string|null $to Fecha de fin (formato YYYY-MM-DD).
     * @param string|null $exclude Términos a excluir.
     * @return array
     */
    public function getCybersecurityNews($query = 'cybersecurity', $from = null, $to = null, $exclude = null)
    {
        // Construir la URL con los filtros
        $url = "https://newsapi.org/v2/everything?q={$query}&language=es&sortBy=publishedAt&apiKey={$this->apiKey}";

        if ($from) {
            $url .= "&from={$from}";
        }
        if ($to) {
            $url .= "&to={$to}";
        }
        if ($exclude) {
            $url .= "&excludeDomains={$exclude}";
        }

        // Cachear las noticias por 1 hora
        return Cache::remember('cybersecurity_news_' . md5($url), now()->addHours(1), function () use ($url) {
            $response = $this->client->get($url);
            return json_decode($response->getBody(), true);
        });
    }
}