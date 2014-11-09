<?php
require_once "../../../vendor/autoload.php";

use Valiknet\Libs\String;

class TestStringClass extends PHPUnit_Framework_TestCase {
    public function textProvider()
    {
        return array(
            array("Lorem Ipsum - це текст-\"риба\", що використовується в друкарстві", 30, "Lorem Ipsum - це...."),
            array("Lorem Ipsum - це", 30, "Lorem Ipsum - це"),
            array("Lorem Ipsum - ", 13, "Lorem Ipsum -....")
        );
    }

    /**
     * @param $original
     * @param $length
     * @param $result
     * @dataProvider textProvider
     */
    public function testCutString($original, $length, $result)
    {
        $string = new String($original);

        $this->assertEquals($result, $string->cutsString($length));
    }
}
 