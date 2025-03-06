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
     * @param string 
     * @param string|null 
     * @param string|null 
     * @param string|null 
     * @return array
     */
    public function getCybersecurityNews($query = 'cybersecurity', $from = null, $to = null, $exclude = null)
    {
        
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

        return Cache::remember('cybersecurity_news_' . md5($url), now()->addHours(1), function () use ($url) {
            $response = $this->client->get($url);
            return json_decode($response->getBody(), true);
        });
    }
}