<?php

use GL\VectorGraphics\VGColor;

class OneA {

  private $vg;

  function __construct($vg) {
    $this->vg = $vg;
  }

  public function main($vg, $parent) {
    echo 'in 1a';
    $vg->beginPath();
    $vg->fontSize(20);
    $vg->fillColor(VGColor::white());
    $vg->text(1150, 100, "1a1a");

    $parent->draw();
  }
}
