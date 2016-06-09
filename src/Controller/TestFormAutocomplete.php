<?php
namespace Drupal\test_form\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
class TestFormAutocomplete {
  public function autocomplete(Request $request) {

    $matches = array('nishant','nishu','manoj','shashank');

    return new JsonResponse($matches);

  }
}