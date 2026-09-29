<?php //php spark make:command Delete;

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use App\Models\Data;

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
    protected $name = 'app:delete-old-data';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'Soft-delete záznamy starší než 11 let.';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'app:delete-old-data';

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

    protected $kdy = 11;

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params)
    {
        $cutoff = (new \DateTimeImmutable())->modify("-{$this->kdy} years")->getTimestamp();
        $data = new Data();

        if ($data->where('created_at <', $cutoff)->delete()) {
            CLI::write('Starší záznamy byly soft-deleteovány.', 'green');
            return;
        }

        CLI::error('Záznamy se nepodařilo soft-deleteovat.');
    }
}
