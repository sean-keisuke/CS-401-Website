<?php
require '../vendor/autoload.php';

use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

function getGCProduct($slug)
{
    $url = 'https://www.guitarcenter.com/' . $slug;
    $product = new Product;
    $product->productURL = $url;

    $client = new Client();

    $crawler = $client->request('GET', $url);
    $product->productName = $crawler->filter('h1')->text();
    $product->productPrice = $crawler->filter('span.topAlignedPrice')->text();
    $product->productStarReview = $crawler->filter('span.stars')->text();
    $product->storeName = "Guitar Center";
    $product->logoURL = ' /images/Guitar_Center_logo.png';
    $product->logoAlt = "Guitar-Center-logo";
    return $product;
}
