<?php namespace PlanetaDelEste\ApiToolbox\Classes\Console;

use PlanetaDelEste\ApiToolbox\Classes\Parser\Create\ResourceIndexCreateFile;

class CreateApiResourceIndex extends CommonConsole
{
    /** @var string The console command name. */
    protected $name = 'toolbox:create.api.resourceindex';
    /** @var string The console command description. */
    protected $description = 'Create a new api resource index collection.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        parent::handle();

        $this->setAuthor(true);
        $this->setPlugin(true);
        $this->setModel();
        $this->setAdditionList(self::CODE_COMMAND_PARENT);
        $this->createFile(ResourceIndexCreateFile::class);
    }
}
