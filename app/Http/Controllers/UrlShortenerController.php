<?php

namespace App\Http\Controllers;

use App\Services\UrlShortnerService;

class UrlShortenerController extends Controller
{
    protected UrlShortnerService $urlShortnerService;
    public function __construct(UrlShortnerService $urlShortnerService)
    {
        $this->urlShortnerService = $urlShortnerService;
    }
    public function encode()
    {
        return $this->urlShortnerService->encode();
    }

    public function decode()
    {
        return $this->urlShortnerService->decode();
    }
}
