<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\CreateModel;
use DB;

class GetAttributeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'attr';

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
        $getTables = DB::select('SELECT * FROM INFORMATION_SCHEMA.TABLES');
        $tables = [];
        foreach ($getTables as $key => $value) {
            $tables[] = $value->TABLE_NAME;
        }

        CreateModel::GetColumns($tables);
    }
}
