<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGeneralSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.app_name', 'Facturis');
        $this->migrator->add('general.app_active', true);

        $this->migrator->add('general.app_devlopper', 'WEDO APP');
        $this->migrator->add('general.app_version', '1.0.0');
 
    }
}
