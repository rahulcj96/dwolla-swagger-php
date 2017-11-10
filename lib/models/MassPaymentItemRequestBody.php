<?php
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */

namespace DwollaSwagger\models;

use \ArrayAccess;

class MassPaymentItemRequestBody implements ArrayAccess {
  static $swaggerTypes = array(
      '_links' => 'object',
      'amount' => 'Amount',
      'metadata' => 'object',
      'correlation_id' => 'string'
  );

  static $attributeMap = array(
      '_links' => '_links',
      'amount' => 'amount',
      'metadata' => 'metadata',
      'correlation_id' => 'correlationId'
  );

  
  public $_links; /* object */
  public $amount; /* Amount */
  public $metadata; /* object */
  public $correlation_id; /* string */

  public function __construct(array $data = null) {
    $this->_links = $data["_links"];
    $this->amount = $data["amount"];
    $this->metadata = $data["metadata"];
    $this->correlation_id = $data["correlation_id"];
  }

  public function offsetExists($offset) {
    return isset($this->$offset);
  }

  public function offsetGet($offset) {
    return $this->$offset;
  }

  public function offsetSet($offset, $value) {
    $this->$offset = $value;
  }

  public function offsetUnset($offset) {
    unset($this->$offset);
  }
}
