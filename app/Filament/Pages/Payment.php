<?php

namespace App\Filament\Pages;

use App\Models\Payment as Invoice;
use Filament\Pages\SimplePage;

class Payment extends SimplePage
{
    protected static string $layout = 'filament.layout.payment';

    protected static string $view = 'filament.pages.payment';

    protected ?string $maxWidth = 'md';

    public Invoice $invoice;
}
