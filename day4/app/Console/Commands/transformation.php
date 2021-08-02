<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class transformation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'transformation
                            {kalimat}
                            {--lowercase}
                            {--uppercase}
                            {--ucwords}
                            ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $kalimat = $this->argument('kalimat');
        $lowercase = $this->option('lowercase');
        $uppercase = $this->option('uppercase');
        $ucwords = $this->option('ucwords');
        

        if ($lowercase) {
            $this->line('Output ' . strtolower($kalimat));
        } else if($uppercase){
            $this->line('Output ' . strtoupper($kalimat));
        } else if($ucwords){
            $this->line('Output ' . ucwords(strtolower($kalimat)));
        }else {
            $this->line('Output ' . $kalimat);
        }

    }
}
