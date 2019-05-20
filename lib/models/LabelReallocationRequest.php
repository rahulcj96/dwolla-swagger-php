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

class LabelReallocationRequest implements ArrayAccess {
  static $swaggerTypes = array(
      'from_label_id' => 'string',
      'to_label_id' => 'string',
      'amount' => 'Amount'
  );

  static $attributeMap = array(
      'from_label_id' => 'fromLabelId',
      'to_label_id' => 'toLabelId',
      'amount' => 'amount'
  );


  public $from_label_id; /* string */
  public $to_label_id; /* string */
  public $partner_id; /* string */
  public $amount; /* Amount */

  public function __construct(array $data = null) {
    $this->from_label_id = $data["from_label_id"];
    $this->to_label_id = $data["to_label_id"];
    $this->partner_id = $data["partner_id"];
    $this->amount = $data["amount"];
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