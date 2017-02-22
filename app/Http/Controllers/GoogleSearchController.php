<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use JanDrda\LaravelGoogleCustomSearchEngine\LaravelGoogleCustomSearchEngine;

class GoogleSearchController extends Controller
{

  public function index(){
    $fulltext = new LaravelGoogleCustomSearchEngine(); // initialize
    $results = $fulltext->getResults('somePhrase'); // get first 10 results for query 'some phrase' 
  }
}

?>