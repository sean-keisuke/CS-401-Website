<?php
require '../vendor/autoload.php';

use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

function getSWProduct($slug)
{
    $url = 'https://www.steveweissmusic.com/product/' . $slug;
    $product = new Product;
    $product->productURL = $url;

    $client = new Client();

    $crawler = $client->request('GET', $url);
    $product->productName = $crawler->filter('h1')->text();
    $product->productPrice = $crawler->filter('span.js-price')->text();
    $product->productStarReview = $crawler->filter('span.star')->text();
    $product->storeName = "Steve Weiss Music";
    $product->logoURL = ' /images/steve-weiss-logo.png';
    $product->logoAlt = "Steve-Weiss-Music-logo";
    return $product;
}
