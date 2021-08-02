<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class arithmetic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'arithmetic
    {angka*}
    {--add}
    {--subtract}
    {--multiply}
    {--divide}
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
        $angka = $this->argument('angka');
        $add = $this->option('add');
        $subtract = $this->option('subtract');
        $multiply = $this->option('multiply');
        $divide = $this->option('divide');
        $result=0;
        

        if ($add) {
            foreach($angka as $n){
            $result+=$n;
            }
            $this->line($result);
        } else if($subtract){
            $result=$angka[0];
            foreach($angka as $urut => $n){
            if($urut!=0){    
            $result-=$n;
                }
            }
            $this->line($result);
        } else if($multiply){
            $result=$angka[0];
            foreach($angka as $urut => $n){
            if($urut!=0){    
            $result*=$n;
                }
            }
            $this->line($result);
        }else if($divide){
            $result=$angka[0];
            foreach($angka as $urut => $n){
            if($urut!=0){    
            $result/=$n;
                }
            }
            $this->line($result);
        }
    }
}
