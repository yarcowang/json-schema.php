<?php
/**
 * Project: json-schema.php
 * User: yarco <yarco.wang@gmail.com>
 * Date: 12/19/16
 * Time: 2:50 PM
 */

class JsonSchemaTest extends PHPUnit_Framework_TestCase
{
    protected static $invalidJsonSchemaData = "null";
    protected static $validJsonSchemaData = <<<EOF
{
	"message": "Success",
	"data": [{
		"id": 4,
		"title": "",
		"image": "https:\/\/s3.cn-north-1.amazonaws.com.cn\/newband\/banner\/banner_20161108.jpg",
		"page": "home",
		"place": 1,
		"type": "course_list",
		"data": {
			"tag": "event2016110801"
		}
	}, {
		"id": 2,
		"title": "",
		"image": "https:\/\/s3.cn-north-1.amazonaws.com.cn\/newband\/banner\/banner_event20160929_1.jpg?123",
		"page": "home",
		"place": 1,
		"type": "url",
		"data": {
			"url": "http:\/\/support.newband.com\/hc\/kb\/article\/209938?123"
		}
	}, {
		"id": 1,
		"title": "\u300a\u79cb\u610f\u6d53\u300b\u5168\u5957\u8bfe\u7a0b",
		"image": "https:\/\/s3.cn-north-1.amazonaws.com.cn\/newband\/banner\/banner_event20160929_2.jpg?123",
		"page": "home",
		"place": 1,
		"type": "course_list",
		"data": {
			"tag": "event20160929"
		}
	}]
}
EOF;

    /**
     * @expectedException \Yarco\JsonSchema\Exception\InvalidSchemaException
     */
    public function testCreateJsonSchema()
    {
        $obj = \Yarco\JsonSchema\JsonSchema::from(self::$validJsonSchemaData);
        $this->assertInstanceOf(\Yarco\JsonSchema\JsonSchema::class, $obj);

        $obj = \Yarco\JsonSchema\JsonSchema::from(self::$invalidJsonSchemaData);
    }
}
