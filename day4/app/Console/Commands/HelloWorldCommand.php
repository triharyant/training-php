<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;
use voku\helper\HtmlDomParser;

class HelloWorldCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hello-word{name}';

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
        /**$process = new Process(['wkhtmltoimage','php.net','gambar-php.png']);
        $process->run(function($type, $buffer){
            if(Process::ERR === $type) {
                echo 'ERR > '.$buffer;
            } else {
                echo 'OUT > '.$buffer;
            }
        });*/

        //$names = $this->argument('name');
        //$names = explode(',', $names);
        //print_r($names);

        //$html = HtmlDomParser::file_get_html('https://www.detik.com/');

        //$elements = $html->find('.berita-utama .media__title');

        //foreach($elements as $element) {
            //$href = $element->findOne('a')->getAttribute('href');
            //$text = $element->findOne('a')->text();
            //$this->line($href);
            //$this->line($text);

            $names = $this->argument('name');
            print_r($names);




    }
}