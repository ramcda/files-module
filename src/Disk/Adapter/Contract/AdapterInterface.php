<?php namespace Anomaly\FilesModule\Disk\Adapter\Contract;

use Anomaly\FilesModule\Disk\Contract\DiskInterface;

/**
 * Interface AdapterInterface
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\FilesModule\Disk\Adapter\Contract
 */
interface AdapterInterface
{

    /**
     * Load the disk.
     *
     * @param DiskInterface $disk
     */
    public function load(DiskInterface $disk);
}
