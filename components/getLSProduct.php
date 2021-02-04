<?php
require '../vendor/autoload.php';

use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

function getLSProduct($slug)
{
    $url = 'https://www.lonestarpercussion.com/' . $slug;
    $product = new Product;
    $product->productURL = $url;

    $client = new Client();

    $crawler = $client->request('GET', $url);
    $product->productName = $crawler->filter('h1')->text();
    $product->productPrice = $crawler->filter('.productPrice')->text();
    $product->productStarReview = $crawler->filter('.reviewAggregateRating')->text();
    $product->storeName = "Lonestar Percussion";
    $product->logoURL = ' /images/Lone-Star-Percussion.png';
    $product->logoAlt = "Lonestar-Percussion-logo";
    return $product;
}
