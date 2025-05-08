<?php

namespace App\Enums;

enum ClientType: string
{
    case SUPPLIER = 'supplier';
    case DISTRIBUTOR = 'distributor';
}
