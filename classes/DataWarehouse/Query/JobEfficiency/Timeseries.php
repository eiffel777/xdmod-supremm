<?php
namespace DataWarehouse\Query\JobEfficiency;

/*
* @author Amin Ghadersohi
* @date 2013-Feb-07
*
*/
class Timeseries extends \DataWarehouse\Query\Timeseries
{
    public function __construct(
        $aggregation_unit_name,
        $start_date,
        $end_date,
        $group_by,
        $stat = 'job_count',
        array $parameters = array(),
        $query_groupname = 'query_groupname',
        array $parameter_description = array(),
        $single_stat = false
    ) {
        parent::__construct(
            'SUPREMM',
            'modw_aggregates',
            'jobefficiency',
            array('job_count', 'core_time'),
            $aggregation_unit_name,
            $start_date,
            $end_date,
            $group_by,
            $stat,
            $parameters,
            $query_groupname,
            $parameter_description,
            $single_stat
        );
    }
}