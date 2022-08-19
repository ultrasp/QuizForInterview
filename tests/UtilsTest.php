<?php 
// require __DIR__ . '/vendor/autoload.php';
use PHPUnit\Framework\TestCase;
// use Utils;

final class UtilsTest extends TestCase{

    public function testCanBeUsedAsString(): void
    {
        $test = 'PHP code  PHP PHP  PHP PHP tester PHP code PHP Sandbox    Online';
        $this->assertEquals(
            [
                'PHP'   => 7
            ],
            Utils::getMaxReapeatedWords($test)
        );
    }

}