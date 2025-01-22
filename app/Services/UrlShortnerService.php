<?php

namespace App\Services;

use App\Repositories\UrlShortnerRepository;

class UrlShortnerService
{
    public function __construct(protected UrlShortnerRepository $urlShortnerRepository){}

    public function encode(): \Illuminate\Http\JsonResponse
    {
        return $this->urlShortnerRepository->encode();
    }

    public function decode(): \Illuminate\Http\JsonResponse
    {
        return $this->urlShortnerRepository->decode();
    }
}
