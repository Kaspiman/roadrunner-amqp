<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.GetWorkerTaskReachabilityResponse</code>
 */
class GetWorkerTaskReachabilityResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Task reachability, broken down by build id and then task queue.
     * When requesting a large number of task queues or all task queues associated with the given build ids in a
     * namespace, all task queues will be listed in the response but some of them may not contain reachability
     * information due to a server enforced limit. When reaching the limit, task queues that reachability information
     * could not be retrieved for will be marked with a single TASK_REACHABILITY_UNSPECIFIED entry. The caller may issue
     * another call to get the reachability for those task queues.
     * Open source users can adjust this limit by setting the server's dynamic config value for
     * `limit.reachabilityTaskQueueScan` with the caveat that this call can strain the visibility store.
     *
     * Generated from protobuf field <code>repeated .temporal.api.taskqueue.v1.BuildIdReachability build_id_reachability = 1;</code>
     */
    private $build_id_reachability;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Temporal\Api\Taskqueue\V1\BuildIdReachability>|\Google\Protobuf\Internal\RepeatedField $build_id_reachability
     *           Task reachability, broken down by build id and then task queue.
     *           When requesting a large number of task queues or all task queues associated with the given build ids in a
     *           namespace, all task queues will be listed in the response but some of them may not contain reachability
     *           information due to a server enforced limit. When reaching the limit, task queues that reachability information
     *           could not be retrieved for will be marked with a single TASK_REACHABILITY_UNSPECIFIED entry. The caller may issue
     *           another call to get the reachability for those task queues.
     *           Open source users can adjust this limit by setting the server's dynamic config value for
     *           `limit.reachabilityTaskQueueScan` with the caveat that this call can strain the visibility store.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Task reachability, broken down by build id and then task queue.
     * When requesting a large number of task queues or all task queues associated with the given build ids in a
     * namespace, all task queues will be listed in the response but some of them may not contain reachability
     * information due to a server enforced limit. When reaching the limit, task queues that reachability information
     * could not be retrieved for will be marked with a single TASK_REACHABILITY_UNSPECIFIED entry. The caller may issue
     * another call to get the reachability for those task queues.
     * Open source users can adjust this limit by setting the server's dynamic config value for
     * `limit.reachabilityTaskQueueScan` with the caveat that this call can strain the visibility store.
     *
     * Generated from protobuf field <code>repeated .temporal.api.taskqueue.v1.BuildIdReachability build_id_reachability = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuildIdReachability()
    {
        return $this->build_id_reachability;
    }

    /**
     * Task reachability, broken down by build id and then task queue.
     * When requesting a large number of task queues or all task queues associated with the given build ids in a
     * namespace, all task queues will be listed in the response but some of them may not contain reachability
     * information due to a server enforced limit. When reaching the limit, task queues that reachability information
     * could not be retrieved for will be marked with a single TASK_REACHABILITY_UNSPECIFIED entry. The caller may issue
     * another call to get the reachability for those task queues.
     * Open source users can adjust this limit by setting the server's dynamic config value for
     * `limit.reachabilityTaskQueueScan` with the caveat that this call can strain the visibility store.
     *
     * Generated from protobuf field <code>repeated .temporal.api.taskqueue.v1.BuildIdReachability build_id_reachability = 1;</code>
     * @param array<\Temporal\Api\Taskqueue\V1\BuildIdReachability>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuildIdReachability($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Taskqueue\V1\BuildIdReachability::class);
        $this->build_id_reachability = $arr;

        return $this;
    }

}

