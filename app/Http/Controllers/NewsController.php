<?php

namespace App\Http\Controllers;

use App\Services\NewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $newsService;

    public function __construct(NewsService $newsService)
    {
        $this->newsService = $newsService;
    }

    /**
     * Muestra las noticias de ciberseguridad con filtros aplicados.
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
{

    $query = $request->get('q', 'cybersecurity');
    $from = $request->get('from');
    $to = $request->get('to');
    $exclude = $request->get('exclude');

    $news = $this->newsService->getCybersecurityNews($query, $from, $to, $exclude);

    return view('news.index', [
        'news' => $news['articles'] ?? [],
        'searchQuery' => $query,
        'from' => $from,
        'to' => $to,
        'exclude' => $exclude,
    ]);
}
}