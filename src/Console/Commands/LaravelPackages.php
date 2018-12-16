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
        $this->publishVendorSpatieBrowsershot();
        $this->publishVendorSpatieLaravelActivitylog();
        $this->publishVendorSpatieLaravelAnalytics();
        $this->publishVendorSpatieLaravelBackup();
        $this->publishVendorSpatieLaravelBladeX();
        $this->publishVendorSpatieLaravelEventProjector();
        $this->publishVendorSpatieLaravelHTML();
        $this->publishVendorSpatieLaravelMedialibrary();
        $this->publishVendorSpatieLaravelPermission();
        $this->publishVendorSpatieLaravelServerMonitor();
        $this->publishVendorSpatieLaravelSlackSlashCommand();
        $this->publishVendorSpatieLaravelTags();
        $this->publishVendorSpatieLaravelUptimeMonitor();
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

        $this->call('vendor:publish', ['--all' => true]);
    }

    /**
     * Publish specific vendor files
     *
     * @return void
     */
    protected function publishVendorSpatieBrowsershot()
    {
        $this->comment('Vendor: Spatie\'s Browsershot');

        // No vendor files
    }

    /**
     * Publish specific vendor files
     *
     * @return void
     */
    protected function publishVendorSpatieLaravelActivitylog()
    {
        $this->comment('Vendor: Spatie\'s Laravel Activitylog');

        $this->callSilent('vendor:publish', [
            '--tag'      => 'migrations',
            '--provider' => Spatie\Activitylog\ActivitylogServiceProvider::class,
        ]);

        $this->callSilent('vendor:publish', [
            '--tag'      => 'config',
            '--provider' => Spatie\Activitylog\ActivitylogServiceProvider::class,
        ]);
    }

    /**
     * Publish specific vendor files
     *
     * @return void
     */
    protected function publishVendorSpatieLaravelAnalytics()
    {
        $this->comment('Vendor: Spatie\'s Laravel Analytics');

        $this->callSilent('vendor:publish', [
            '--provider' => Spatie\Analytics\AnalyticsServiceProvider::class,
        ]);
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
            '--provider' => Spatie\Backup\BackupServiceProvider::class,
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
    protected function publishVendorSpatieLaravelEventProjector()
    {
        $this->comment('Vendor: Spatie\'s Laravel Event Projector');

        $this->callSilent('vendor:publish', [
            '--tag'      => 'migrations',
            '--provider' => Spatie\EventProjector\EventProjectorServiceProvider::class,
        ]);

        $this->callSilent('vendor:publish', [
            '--tag'      => 'config',
            '--provider' => Spatie\EventProjector\EventProjectorServiceProvider::class,
        ]);
    }

    /**
     * Publish specific vendor files
     *
     * @return void
     */
    protected function publishVendorSpatieLaravelHTML()
    {
        $this->comment('Vendor: Spatie\'s Laravel HTML');

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
            '--provider' => Spatie\MediaLibrary\MediaLibraryServiceProvider::class,
        ]);

        $this->callSilent('vendor:publish', [
            '--tag'      => 'config',
            '--provider' => Spatie\MediaLibrary\MediaLibraryServiceProvider::class,
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

    /**
     * Publish specific vendor files
     *
     * @return void
     */
    protected function publishVendorSpatieLaravelServerMonitor()
    {
        $this->comment('Vendor: Spatie\'s Laravel Server Monitor');

        $this->callSilent('vendor:publish', [
            '--tag'      => 'migrations',
            '--provider' => Spatie\ServerMonitor\ServerMonitorServiceProvider::class,
        ]);

        $this->callSilent('vendor:publish', [
            '--tag'      => 'config',
            '--provider' => Spatie\ServerMonitor\ServerMonitorServiceProvider::class,
        ]);
    }

    /**
     * Publish specific vendor files
     *
     * @return void
     */
    protected function publishVendorSpatieLaravelSlackSlashCommand()
    {
        $this->comment('Vendor: Spatie\'s Laravel Slack Slash Command');

        $this->callSilent('vendor:publish', [
            '--tag'      => 'config',
            '--provider' => Spatie\SlashCommand\SlashCommandServiceProvider::class,
        ]);
    }

    /**
     * Publish specific vendor files
     *
     * @return void
     */
    protected function publishVendorSpatieLaravelTags()
    {
        $this->comment('Vendor: Spatie\'s Laravel Tags');

        $this->callSilent('vendor:publish', [
            '--tag'      => 'migrations',
            '--provider' => Spatie\Tags\TagsServiceProvider::class,
        ]);

        $this->callSilent('vendor:publish', [
            '--tag'      => 'config',
            '--provider' => Spatie\Tags\TagsServiceProvider::class,
        ]);
    }

    /**
     * Publish specific vendor files
     *
     * @return void
     */
    protected function publishVendorSpatieLaravelUptimeMonitor()
    {
        $this->comment('Vendor: Spatie\'s Laravel Uptime Monitor');

        $this->callSilent('vendor:publish', [
            '--provider' => Spatie\UptimeMonitor\UptimeMonitorServiceProvider::class,
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
        $this->line('version 1.15.0 by @rkukuh');
        $this->line('****************************************************');
        $this->line('');
    }
}
