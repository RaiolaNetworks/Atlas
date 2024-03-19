<?php

declare(strict_types=1);

namespace Raiolanetworks\Atlas\Commands;

use Illuminate\Console\Command;
use Raiolanetworks\Atlas\Enum\EntitiesEnum;
use Raiolanetworks\Atlas\Models\Timezone;

class TimezonesSeeder extends BaseSeeder
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    public $signature = 'atlas:timezones';

    /**
     * The console command description.
     *
     * @var string
     */
    public $description = 'Seeding of timezones in the database';

    protected ?string $dataPath = __DIR__ . '/../../resources/json/countries.json';

    protected string $pluralName = EntitiesEnum::Timezones->value;

    protected ?string $model = Timezone::class;

    protected function parseItem(array $rawItem, array &$bulk): void
    {
        $bulk[] = [
            'country_id' => $rawItem['id'],
            'name'       => $rawItem['timezones'][0]['zoneName'],
        ];
    }
}
