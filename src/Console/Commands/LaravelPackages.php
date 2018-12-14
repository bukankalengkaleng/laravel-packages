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

        $this->comment('Vendor: Laravel');

        $this->callSilent('vendor:publish', ['--all' => true]);

        $this->comment('Vendor: Spatie');

        $this->callSilent('vendor:publish', [
            '--tag'      => 'migrations',
            '--provider' => Spatie\Permission\PermissionServiceProvider::class,
        ]);

        $this->callSilent('vendor:publish', [
            '--tag'      => 'config',
            '--provider' => Spatie\Permission\PermissionServiceProvider::class,
        ]);

        $this->info('[DONE ] Publishing vendor files');

        $this->line('');

        $this->info('[START] Rebuild database schema..........');
        $this->callSilent('migrate:fresh', ['--force' => true]);
        $this->info('[DONE ] Rebuild database schema.');

        $this->line('');
    }

    /**
     * Command's copyright'
     *
     * @return mixed
     */
    protected function copyright()
    {
        $this->line('');
        $this->line('******************************************');
        $this->line('Laravel-Packages Installer artisan command');
        $this->line('version 1.0 by @rkukuh');
        $this->line('******************************************');
        $this->line('');
    }
}
