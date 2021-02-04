<?php
require '../vendor/autoload.php';

use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

function getAZProduct($slug)
{
    $url = 'https://www.amazon.com/' . $slug;
    $product = new Product;
    $product->productURL = $url;

    $client = new Client();

    $crawler = $client->request('GET', $url);
    $product->productName = $crawler->filter('#productTitle')->text();
    $product->productPrice = $crawler->filter('#priceblock_ourprice')->text();
    $product->productStarReview = $crawler->filter('.a-icon-alt')->text();
    $product->storeName = "Amazon";
    $product->logoURL = ' /images/amazonLogo.png';
    $product->logoAlt = "Amazon-Logo";
    return $product;
}
