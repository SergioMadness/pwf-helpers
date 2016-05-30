<?php

use pwf\helpers\Validator;

class ValidatorTest extends \PHPUnit_Framework_TestCase
{

    public function testIt()
    {
        $data = [
            'emailValid' => 'test@test.com',
            'emailInvalid' => '123qwe',
            'equalParam1' => 'test',
            'equalParam2' => 'test',
            'equalParam3' => 'test3',
            'param6' => '123456',
            'param1' => '1'
        ];

        $rules   = [
            [Validator::VALIDATOR_EMAIL, 'emailValid', 'params' => [], 'result' => true],
            [Validator::VALIDATOR_EMAIL, 'emailInvalid', 'params' => [], 'result' => false],
            [Validator::VALIDATOR_EQUAL, 'equalParam1', 'params' => [
                    'equalTo' => 'equalParam2'
                ], 'result' => true],
            [Validator::VALIDATOR_EQUAL, 'equalParam1', 'params' => [
                    'equalTo' => 'equalParam3'
                ], 'result' => false],
            [Validator::VALIDATOR_LENGTH, 'param1', 'params' => [
                    'min' => 5
                ], 'result' => false],
            [Validator::VALIDATOR_LENGTH, 'param6', 'params' => [
                    'max' => 5
                ], 'result' => false],
            [Validator::VALIDATOR_LENGTH, 'param6', 'params' => [
                    'min' => 1,
                    'max' => 7
                ], 'result' => true],
            [Validator::VALIDATOR_USER, 'param6', 'params' => [
                    'callback' => function($paramName, $data) {
                        return false;
                    }
                ], 'result' => false],
            [Validator::VALIDATOR_USER, 'param6', 'params' => [
                    'callback' => function($paramName, $data) {
                        return true;
                    }
                ], 'result' => true]
        ];

        foreach ($rules as $rule) {
            $this->assertEquals($rule['result'],
                Validator::validate($rule[0], $rule[1], $data, $rule['params']));
        }
    }
}