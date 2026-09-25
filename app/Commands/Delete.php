<?php //php spark make:command Delete;

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class Delete extends BaseCommand
{
    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'App';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'command:name'; //to co se bude volat, když chceme skript spustit

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = '';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'command:name [arguments] [options]';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * The Command's Options
     *
     * @var array
     */
    protected $options = []; //parametry, (např. smažu duben 2025)

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params) //sem se píše samotný kód 
    {
        //
    }
}
