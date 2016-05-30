<?php

namespace pwf\helpers;

class Validator
{
    /**
     * Check equal
     */
    const VALIDATOR_EQUAL = 'equal';

    /**
     * Check string length
     */
    const VALIDATOR_LENGTH = 'length';

    /**
     * Check email address
     */
    const VALIDATOR_EMAIL = 'email';

    /**
     * Check by user defined function
     */
    const VALIDATOR_USER = 'callback';

    /**
     * Validate by type
     *
     * @param string $type
     * @param string $paramName
     * @param array $data
     * @param array $params
     * @return mixed
     * @throws \Exception
     */
    public static function validate($type, $paramName, $data, array $params = [])
    {
        $data = (array) $data;
        switch ($type) {
            case self::VALIDATOR_USER:
                return static::validateByCallback($paramName, $data, $params);
            case self::VALIDATOR_EMAIL:
                return static::validateEmail($paramName, $data);
            case self::VALIDATOR_LENGTH:
                return static::validateLength($paramName, $data, $params);
            case self::VALIDATOR_EQUAL:
                return static::validateEquality($paramName, $data, $params);
            default:
                throw new \Exception('Unknown validator');
        }
    }

    /**
     * Validate equality
     *
     * @param string $paramName
     * @param array $data
     * @param array $params
     * @return boolean
     * @throws \Exception
     */
    public static function validateEquality($paramName, array $data,
                                            array $params = [])
    {
        $result = true;

        if (!isset($data[$paramName])) {
            throw new \Exception('Parameter is not set');
        }
        if (!isset($params['equalTo'])) {
            throw new \Exception('Parameter \'equalTo\' is required');
        }

        if ($data[$paramName] !== $data[$params['equalTo']]) {
            $result = false;
        }

        return $result;
    }

    /**
     * Validate length
     *
     * @param string $paramName
     * @param array $data
     * @param array $params
     * @return boolean
     * @throws \Exception
     */
    public static function validateLength($paramName, array $data,
                                          array $params = [])
    {
        $result = true;

        if (!isset($data[$paramName])) {
            throw new \Exception('Parameter is not set');
        }

        $length = strlen($data[$paramName]);
        if (isset($params['min']) && $length < $params['min']) {
            $result = false;
        }
        if (isset($params['max']) && $length > $params['max']) {
            $result = false;
        }

        return $result;
    }

    /**
     * Validate e-mail
     *
     * @param string $paramName
     * @param array $data
     * @return bool
     * @throws \Exception
     */
    public static function validateEmail($paramName, array $data)
    {
        $result = false;
        if (isset($data[$paramName])) {
            $result = filter_var($data[$paramName], FILTER_VALIDATE_EMAIL) !== false;
        } else {
            throw new \Exception('Parameter is not set');
        }
        return $result;
    }

    /**
     * Validate by user function
     *
     * @param string $paramName
     * @param mixed $data
     * @param array $params
     * @return mixed
     * @throws \Exception
     */
    public static function validateByCallback($paramName, array $data,
                                              array $params)
    {
        if (isset($params['callback'])) {
            return $params['callback']($paramName, $data);
        } else {
            throw new \Exception('Callback parameter is required');
        }
    }
}