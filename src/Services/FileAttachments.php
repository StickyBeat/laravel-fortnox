<?php

namespace KFoobar\Fortnox\Services;

use KFoobar\Fortnox\Services\Client;
use KFoobar\Fortnox\Resources\FileAttachment\FileAttachments as FileAttachmentsResource;

class FileAttachments
{
    /**
     * Constructs a new instance.
     */
    public function __construct()
    {
        $this->client = new Client;
        $this->client->baseUrl = config('fileattachments.host');
    }

    /**
     * Returns the accounts resource.
     *
     * @return \KFoobar\Fortnox\Resources\Account\Accounts
     */
    public function attachments()
    {
        return new FileAttachmentsResource($this->client);
    }


}
