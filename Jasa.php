<?php

namespace Pbo\Marketplace;

require("./PropertyConstant.php");

use Pbo\Marketplace\Produk;

class Jasa
{
    use Produk;

    public function payment($tipe)
    {
        return match ($tipe) {
            "virtual" => "Virtual Account",
            "qris" => "QRIS",
            default => "Pembayaran hanya va dan qris"
        };
    }
}
