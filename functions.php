<?php

function printMainDetails($istance) {
  return 'title: ' . $istance->title . ', director: ' . $istance->director . ', year: ' . $istance->year_production . ', country: ' . $istance->country_production . ', length: ' . $istance->length;
}
