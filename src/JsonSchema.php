<?php
/**
 * Project: json-schema.php
 * User: yarco <yarco.wang@gmail.com>
 * Date: 12/19/16
 * Time: 1:51 PM
 */

namespace Yarco\JsonSchema;

use Yarco\JsonSchema\Exception\InvalidSchemaException;


class JsonSchema
{
    protected $_schema;

    protected function __construct($jsonSchema)
    {
        $this->_schema = $jsonSchema;
    }

    public static function from(string $jsonSchemaData)
    {
        $jsonSchema = json_decode($jsonSchemaData);

        if (!is_array($jsonSchema) && !is_object($jsonSchema)) {
            throw new InvalidSchemaException("invalid json data, must be array or object");
        }

        return new self($jsonSchema);
    }

    public static function fromFile(string $filename)
    {
        return self::from(file_get_contents($filename));
    }

    public function validate()
    {

    }
}