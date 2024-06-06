<?php

namespace App\Console\Commands;

use App\Models\CarsMake;
use App\Models\CarsModel;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ImportCarData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-car-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import car data from a JSON file';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $json = File::get(database_path('car-makes.json'));
        $data = json_decode($json, true);
        foreach ($data as $item) {
            $carMake = CarsMake::create(['name' => $item['name']]);
            foreach ($item['models'] as $model) {
                CarsModel::create([
                    'name' => $model['name'],
                    'series' => $model['series'],
                    'cars_make_id' => $carMake->id,
                ]);
            }
        }
        $this->info('Car data imported successfully.');
    }
}
