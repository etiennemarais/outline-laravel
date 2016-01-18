<?php
namespace OutlineLaravel\Commands;

use DrafterPhp\Drafter;
use Illuminate\Console\Command;
use Outline\ApiBlueprint\ApiBlueprint;
use Outline\TestGenerator\TestGenerator;

class Regenerate extends Command
{
    protected $name = 'outline:regenerate';
    protected $description = 'Regenerate feature tests from the api blueprint specification';
    private $apiBlueprintFile;

    public function __construct()
    {
        parent::__construct();

        // TODO move this into config file of service provider package to be set in .env
        $this->apiBlueprintFile = base_path() . '/apiary.apib';
    }

    public function handle()
    {
        $this->info("Regenerating feature tests from your apiary doc: \n{$this->apiBlueprintFile}");

        $drafter = new Drafter(base_path() . '/vendor/bin/drafter');

        $apiBlueprint = new ApiBlueprint($drafter, $this->apiBlueprintFile);

        (new TestGenerator)
            ->with($apiBlueprint)
            ->outputTo(base_path() . '/tests/Features')
            ->generateTestsFor('lumen');
    }
}
