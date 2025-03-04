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
    // Obtener los parámetros de búsqueda
    $query = $request->get('q', 'cybersecurity');
    $from = $request->get('from');
    $to = $request->get('to');
    $exclude = $request->get('exclude');

    // Obtener las noticias filtradas
    $news = $this->newsService->getCybersecurityNews($query, $from, $to, $exclude);

    // Verificar la respuesta (opcional, solo para depuración)
    // dd($news);

    return view('news.index', [
        'news' => $news['articles'] ?? [],
        'searchQuery' => $query,
        'from' => $from,
        'to' => $to,
        'exclude' => $exclude,
    ]);
}
}