<?php declare(strict_types=1);

namespace Thej6s\VendorDirectoryInPhpat\Tests\Architecture;

use PhpAT\Rule\Rule;
use PhpAT\Selector\Selector;
use PhpAT\Test\ArchitectureTest;

class ExampleTest extends ArchitectureTest
{
    public function testTest(): Rule
    {
        return $this->newRule
            ->classesThat(Selector::haveClassName('Thej6s\VendorDirectoryInPhpat\*'))
            ->canOnlyDependOn()
            ->classesThat(Selector::haveClassName('Symfony\*'))
            ->build();
    }
}
