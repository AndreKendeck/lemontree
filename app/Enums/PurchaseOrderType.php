<?php

namespace App\Enums;

enum PurchaseOrderType: string
{
    case SUPPLIER = 'POS';
    case DISTRIBUTOR = 'POD';
}
