<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.ListSchedulesRequest</code>
 */
class ListSchedulesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The namespace to list schedules in.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * How many to return at once.
     *
     * Generated from protobuf field <code>int32 maximum_page_size = 2;</code>
     */
    protected $maximum_page_size = 0;
    /**
     * Token to get the next page of results.
     *
     * Generated from protobuf field <code>bytes next_page_token = 3;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *           The namespace to list schedules in.
     *     @type int $maximum_page_size
     *           How many to return at once.
     *     @type string $next_page_token
     *           Token to get the next page of results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * The namespace to list schedules in.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * The namespace to list schedules in.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * How many to return at once.
     *
     * Generated from protobuf field <code>int32 maximum_page_size = 2;</code>
     * @return int
     */
    public function getMaximumPageSize()
    {
        return $this->maximum_page_size;
    }

    /**
     * How many to return at once.
     *
     * Generated from protobuf field <code>int32 maximum_page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaximumPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->maximum_page_size = $var;

        return $this;
    }

    /**
     * Token to get the next page of results.
     *
     * Generated from protobuf field <code>bytes next_page_token = 3;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to get the next page of results.
     *
     * Generated from protobuf field <code>bytes next_page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->next_page_token = $var;

        return $this;
    }

}

