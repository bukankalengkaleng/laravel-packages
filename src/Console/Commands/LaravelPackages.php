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
    protected $signature = 'laravel-packages:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish all vendor files, Install other packages, and rebuild DB schema';

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
        $this->line('');

        $this->publishAllVendorFiles();
        $this->line('');

        $this->installLaravelDusk();
        $this->line('');

        $this->installLaravelHorizon();
        $this->line('');

        $this->installLaravelTelescope();
        $this->line('');

        $this->rebuildDatabaseSchema();
        $this->line('');

        $this->installLaravelPassport();
        $this->line('');

        $this->printReport();
        $this->line('');
    }

    /**
     * Publish all vendor files
     *
     * @return void
     */
    protected function publishAllVendorFiles()
    {
        $this->info('[START] Publishing all vendor files..........');

        $this->call('vendor:publish', ['--all' => true]);

        $this->info('[DONE ] Publishing all vendor files.');
    }

    /**
     * Install Laravel Dusk
     *
     * @return void
     */
    protected function installLaravelDusk()
    {
        $this->info('[START] Laravel Dusk installation..........');

        $this->call('dusk:install');

        $this->info('[DONE ] Laravel Dusk installation.');
    }

    /**
     * Install Laravel Horizon
     *
     * @return void
     */
    protected function installLaravelHorizon()
    {
        $this->info('[START] Laravel Horizon installation..........');

        $this->call('horizon:install');
        $this->call('queue:failed-table');

        $this->info('[DONE ] Laravel Horizon installation.');
    }

    /**
     * Install Laravel Passport
     *
     * @return void
     */
    protected function installLaravelPassport()
    {
        $this->info('[START] Laravel Passport installation..........');

        $this->call('passport:install', ['--force' => true]);

        $this->info('[DONE ] Laravel Passport installation.');
    }

    /**
     * Install Laravel Telescope
     *
     * @return void
     */
    protected function installLaravelTelescope()
    {
        $this->info('[START] Laravel Telescope installation..........');

        $this->call('telescope:install');

        $this->info('[DONE ] Laravel Telescope installation.');
    }

    /**
     * Rebuild database schema
     *
     * @return void
     */
    protected function rebuildDatabaseSchema()
    {
        $this->info('[START] Rebuild database schema..........');

        $this->call('migrate:fresh');

        $this->info('[DONE ] Rebuild database schema.');
    }

    protected function printReport()
    {
        $this->info('***** INFORMATION *****');
        $this->line('1. You may start Laravel Horizon using: "php artisan horizon"');
        $this->line('2. You may start Websockets server using: "php artisan websockets:serve"');
        $this->line('3. You may create Laravel Passport\'s client using: "php artisan passport:client"');
        $this->line('4. A premium license is required to be able to use DataTables Editor library');
        $this->line('5. Laravel Notification channels: http://laravel-notification-channels.com');
        $this->line('6. Laravel Socialite providers: https://socialiteproviders.github.io/providers/digital-ocean.html');
    }
}
