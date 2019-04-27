<?php

class FreshpingResponseData
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getCheckStateName()
    {
        return $this->data->check_state_name;
    }

    public function getCheckResponseTime()
    {
        return $this->data->check_target_response_time;
    }

    public function getCheckId()
    {
        return $this->data->check_id;
    }

    public function getRequestStartTime()
    {
        return new DateTime($this->data->request_start_time);
    }

    public function getCheckName()
    {
        return $this->data->check_name;
    }

    public function getApplicationName()
    {
        return $this->data->application_name;
    }

    public function getRequestUrl()
    {
        return $this->data->request_url;
    }

    public function getComputedResponseTime()
    {
        return $this->data->check_computed_target_response_time;
    }

    public function getResponseTime()
    {
        return $this->data->response_time;
    }

    public function getHttpStatusCode()
    {
        return $this->data->http_status_code;
    }

    public function __toString()
    {
        return "{$this->getCheckName()} ({$this->getCheckId()}): {$this->getCheckStateName()}, {$this->getComputedResponseTime()} ms, {$this->getRequestStartTime()->format('Y-m-d H:m:i')}";
    }

    /**
     * [recently_started_check_state_name] => 
     * [recently_started_check_start_time] => 
     * [recently_started_check_http_status_code] => 
     * [recently_started_check_response_time] => 
     */
}
