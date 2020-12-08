<?php

/**
 * @require PHP 8.0
 */
class EachTest extends PHPUnit_Framework_TestCase
{
    public function testEach()
    {
        $array = array(
            'key0' => 'value0',
            'key1' => 'value1',
            'key2' => 'value2'
        );

        $i = 0;
        while ($current = each($array)) {
            $k = $current[0];
            $v = $current[1];
            $key = $current['key'];
            $value = $current['value'];
            $this->assertSame('key'.$i, $k);
            $this->assertSame('value'.$i, $v);
            $this->assertSame('key'.$i, $key);
            $this->assertSame('value'.$i, $value);
            $i++;
        }
    }
}
