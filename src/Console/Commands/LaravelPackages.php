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

        $this->installLaravelDusk();
        $this->line('');

        $this->installLaravelHorizon();
        $this->line('');

        $this->rebuildDatabaseSchema();
        $this->line('');

        $this->installLaravelPassport();
        $this->line('');

        $this->publishAllVendorFiles();
        $this->line('');

        $this->runSelfDiagnosis();
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

        $this->info('[DONE ] Publishing all vendor files');
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

        $this->info('[DONE ] Laravel Dusk installation');
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

        $this->info('[DONE ] Laravel Horizon installation');
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
        $this->call('passport:keys');

        $this->info('[DONE ] Laravel Passport installation');
    }

    /**
     * Rebuild database schema
     *
     * @return void
     */
    protected function rebuildDatabaseSchema()
    {
        $this->info('[START] Rebuild database schema..........');

        $this->callSilent('migrate:fresh', ['--force' => true]);

        $this->info('[DONE ] Rebuild database schema.');
    }

    /**
     * Run BeyondCode's Laravel Self-Diagnosis command
     *
     * @return void
     */
    protected function runSelfDiagnosis()
    {
        $this->info('[START] Run self-diagnosis..........');
        $this->call('self-diagnosis');
        $this->info('[DONE ] Run self-diagnosis..........');
    }

    protected function printReport()
    {
        $this->info('***** INFORMATION *****');
        $this->line('1. Start Laravel Horizon using: "php artisan horizon"');
        $this->line('2. Start Websockets server using: "php artisan websockets:serve"');
        $this->line('3. Create Laravel Passport\'s client using: "php artisan passport:client"');
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
        $this->line('version 1.21.0 by @rkukuh');
        $this->line('****************************************************');
        $this->line('');
    }
}
