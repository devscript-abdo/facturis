<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateCompanySettings extends SettingsMigration
{

    public function up(): void
    {

        $this->migrator->add('company.name', 'WEDO APP');
        $this->migrator->add('company.website', 'https://wedoapp.ma');
        $this->migrator->add('company.logo', 'logo.png');
        $this->migrator->add('company.addresse', 'Casablanca TechnoPark bureau 425');
        $this->migrator->add('company.telephone_a', '+212660405003');
        $this->migrator->add('company.telephone_b', '+212677512753');
        $this->migrator->add('company.email', 'contact@wedoapp.ma');
        $this->migrator->add('company.rc', '000000');
        $this->migrator->add('company.ice', '000000000000000');
        $this->migrator->add('company.cnss', null);
        $this->migrator->add('company.patente', '000000');
        $this->migrator->add('company.if', '000000');

        $this->migrator->add('company.bank_name', 'ATTIJARI WAFA BANK');
        $this->migrator->add('company.bank_rib', '123456789321458745214253');
    }
}
