<?php
declare(strict_types=1);

namespace LessQueue;

use LessQueue\Job\Job;
use LessQueue\Job\Property\Name;
use LessQueue\Job\Property\Priority;
use LessValueObject\Number\Int\Date\Timestamp;
use LessValueObject\Number\Int\Time\Second;

interface Queue
{
    /**
     * @param Name $name
     * @param array<string, mixed> $data
     * @param Timestamp|null $until
     * @param Priority|null $priority
     */
    public function publish(Name $name, array $data, ?Timestamp $until = null, ?Priority $priority = null): void;

    public function republish(Job $job): void;

    public function reserve(?Second $timeout = null): ?Job;

    public function delete(Job $job): void;

    public function bury(Job $job): void;
}
