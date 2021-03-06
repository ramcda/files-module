<?php namespace Anomaly\FilesModule\Folder\Command;

use Anomaly\FilesModule\File\Contract\FileRepositoryInterface;
use Anomaly\FilesModule\Folder\Contract\FolderRepositoryInterface;
use Anomaly\Streams\Platform\Support\Decorator;
use Illuminate\Contracts\Bus\SelfHandling;

/**
 * Class GetFolder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\FilesModule\Folder\Command
 */
class GetFolder implements SelfHandling
{

    /**
     * The folder identifier.
     *
     * @var mixed
     */
    protected $identifier;

    /**
     * Create a new GetFolder instance.
     *
     * @param $identifier
     */
    public function __construct($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * Handle the command.
     *
     * @param FileRepositoryInterface   $files
     * @param FolderRepositoryInterface $folders
     * @param Decorator                 $decorator
     * @return \Anomaly\FilesModule\Folder\Contract\FolderInterface|\Anomaly\Streams\Platform\Model\EloquentModel|null
     */
    public function handle(FolderRepositoryInterface $folders)
    {
        if (is_numeric($this->identifier)) {
            return $folders->find($this->identifier);
        }

        if (!is_numeric($this->identifier)) {
            return $folders->findBySlug($this->identifier);
        }

        return null;
    }
}
