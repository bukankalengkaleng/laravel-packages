<?php

namespace BukanKalengKaleng\LaravelPackages\Console\Commands;

use Illuminate\Console\Command;

class LaravelPackages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bukankalengkaleng:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install anything required';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->copyright();

        $this->info('[START] Publishing vendor files..........');
        $this->publishVendorLaravel();
        $this->publishVendorSpatieLaravelBackup();
        $this->publishVendorSpatieLaravelBladeX();
        $this->publishVendorSpatieLaravelMedialibrary();
        $this->publishVendorSpatieLaravelPermission();
        $this->info('[DONE ] Publishing vendor files');

        $this->line('');

        $this->rebuildDatabaseSchema();

        $this->line('');
    }

    /**
     * Publish specific vendor
     *
     * @return void
     */
    protected function publishVendorLaravel()
    {
        $this->comment('Vendor: Laravel');

        $this->callSilent('vendor:publish', ['--all' => true]);
    }

    /**
     * Publish specific vendor files
     *
     * @return void
     */
    protected function publishVendorSpatieLaravelBackup()
    {
        $this->comment('Vendor: Spatie\'s Laravel Backup');

        $this->callSilent('vendor:publish', [
            '--provider' => Spatie\Permission\BackupServiceProvider::class,
        ]);
    }

    /**
     * Publish specific vendor files
     *
     * @return void
     */
    protected function publishVendorSpatieLaravelBladeX()
    {
        $this->comment('Vendor: Spatie\'s Laravel Blade X');

        // No vendor files
    }

    /**
     * Publish specific vendor files
     *
     * @return void
     */
    protected function publishVendorSpatieLaravelMedialibrary()
    {
        $this->comment('Vendor: Spatie\'s Laravel Medialibrary');

        $this->callSilent('vendor:publish', [
            '--tag'      => 'migrations',
            '--provider' => Spatie\Permission\MediaLibraryServiceProvider::class,
        ]);

        $this->callSilent('vendor:publish', [
            '--tag'      => 'config',
            '--provider' => Spatie\Permission\MediaLibraryServiceProvider::class,
        ]);
    }

    /**
     * Publish specific vendor files
     *
     * @return void
     */
    protected function publishVendorSpatieLaravelPermission()
    {
        $this->comment('Vendor: Spatie\'s Laravel Permission');

        $this->callSilent('vendor:publish', [
            '--tag'      => 'migrations',
            '--provider' => Spatie\Permission\PermissionServiceProvider::class,
        ]);

        $this->callSilent('vendor:publish', [
            '--tag'      => 'config',
            '--provider' => Spatie\Permission\PermissionServiceProvider::class,
        ]);
    }

    protected function rebuildDatabaseSchema()
    {
        $this->info('[START] Rebuild database schema..........');

        $this->callSilent('migrate:fresh', ['--force' => true]);

        $this->info('[DONE ] Rebuild database schema.');
    }

    /**
     * Command's copyright'
     *
     * @return mixed
     */
    protected function copyright()
    {
        $this->line('');
        $this->line('****************************************************');
        $this->line('"Laravel-Packages Installer" artisan command');
        $this->line('version 1.6.0 by @rkukuh');
        $this->line('****************************************************');
        $this->line('');
    }
}
