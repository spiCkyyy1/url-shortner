<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UrlShortnerRepository
{
    public function encode(): \Illuminate\Http\JsonResponse
    {
        $request = request();
        $validation = Validator::make($request->all(), [
            'url' => 'required|url'
        ]);
        if($validation->fails())
        {
            return response()->json(['error' => $validation->errors()], 400);
        }

        $originalUrl = $request->input('url');

        $shortCode = Str::random(6);
        Redis::set($shortCode, $originalUrl);

        return response()->json(['short_url' => url($shortCode)]);
    }

    public function decode(): \Illuminate\Http\JsonResponse
    {
        $request = request();

        $validation = Validator::make($request->all(), [
            'short_url' => 'required|url'
        ]);

        if($validation->fails())
        {
            return response()->json(['error' => $validation->errors()], 400);
        }

        $shortUrl = $request->input('short_url');
        $shortCode = parse_url($shortUrl, PHP_URL_PATH);

        $originalUrl = Redis::get(ltrim($shortCode, '/'));

        if (!$originalUrl) {
            return response()->json(['error' => 'Short URL not found'], 404);
        }

        return response()->json(['original_url' => $originalUrl]);
    }

}
