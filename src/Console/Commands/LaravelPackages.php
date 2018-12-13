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
        $this->info('[START] Publish: Spatie\'s Laravel Permission files.....');
        $this->call('vendor:publish', [
            '--tag'      => 'migrations',
            '--provider' => 'Spatie\Permission\PermissionServiceProvider',
        ]);

        $this->call('vendor:publish', [
            '--tag'      => 'config',
            '--provider' => 'Spatie\Permission\PermissionServiceProvider',
        ]);
        $this->info('[DONE ] Publish: Spatie\'s Laravel Permission files.');
        $this->line('');

        $this->call('memfis:fresh');
    }
}
