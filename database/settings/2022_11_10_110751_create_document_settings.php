<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateDocumentSettings extends SettingsMigration
{
    public function up(): void
    {

        $this->migrator->add('document.invoice_prefix', 'FACT-');
        $this->migrator->add('document.invoice_start', 1);

        $this->migrator->add('document.estimate_prefix', 'DEVIS-');
        $this->migrator->add('document.estimate__start', 1);

        $this->migrator->add('document.bc_prefix', 'BC-');
        $this->migrator->add('document.bc__start', 1);


        $this->migrator->add('document.bl_prefix', 'BL-');
        $this->migrator->add('document.bl__start', 1);

        $this->migrator->add('document.bill_prefix', 'REGL-');
        $this->migrator->add('document.bill__start', 1);

    }
}
