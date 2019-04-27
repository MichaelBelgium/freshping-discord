<?php

class FreshpingResponse
{
    private $response;

    public function __construct($response)
    {
        $this->response = json_decode($response);
    }

    public function getOrganizationName()
    {
        return $this->response->organization_name;
    }

    public function getWebhookEventId()
    {
        return $this->response->webhook_event_id;
    }

    public function getOrganizationId()
    {
        return $this->response->organization_id;
    }

    public function getWebhookType()
    {
        return $this->response->webhook_type;
    }

    public function getWebhookEventData()
    {
        return new FreshpingResponseData($this->response->webhook_event_data);
    }

    public function getWebhookId()
    {
        return $this->response->webhook_id;
    }

    public function getCreatedOn()
    {
        return new DateTime($this->response->webhook_event_created_on);
    }

    public function __toString()
    {
        return "{$this->getOrganizationName()} ({$this->getOrganizationId()}), {$this->getWebhookType()} ({$this->getWebhookId()}), {$this->getCreatedOn()->format('Y-m-d H:m:i')}";
    }
}
