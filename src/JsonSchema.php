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

    protected function __construct($jsonSchemaData)
    {
        $this->_schema = $jsonSchemaData;
    }

    public static function from($jsonSchemaData)
    {
        if (!is_array($jsonSchemaData) && !is_object($jsonSchemaData)) {
            throw new InvalidSchemaException("invalid json data, must be array or object");
        }

        return new self($jsonSchemaData);
    }
}