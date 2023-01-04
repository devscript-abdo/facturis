<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class DocumentSettings extends Settings
{
    public string $invoice_prefix;

    public int $invoice_start;

    public string $invoiceavoir_prefix;

    public int $invoiceavoir_start;

    public string $estimate_prefix;

    public int $estimate_start;

    public string $boncommand_prefix;

    public int $boncommand_start;

    public string $bl_prefix;

    public int $bl_start;

    public string $bill_prefix;

    public int $bill_start;

    public static function group(): string
    {
        return 'document';
    }
}
