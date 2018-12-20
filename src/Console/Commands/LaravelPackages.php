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

        $this->publishAllVendorFiles();
        $this->line('');

        $this->rebuildDatabaseSchema();
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
     * Command's copyright'
     *
     * @return mixed
     */
    protected function copyright()
    {
        $this->line('');
        $this->line('****************************************************');
        $this->line('"Laravel-Packages Installer" artisan command');
        $this->line('version 1.16.0 by @rkukuh');
        $this->line('****************************************************');
        $this->line('');
    }
}
