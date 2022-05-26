<?php

namespace Enqueue\NullTransport\Tests\Spec;

use Enqueue\NullTransport\NullMessage;
use Interop\Queue\Spec\MessageSpec;

class NullMessageTest extends MessageSpec
{
    /**
     * {@inheritdoc}
     */
    protected function createMessage()
    {
        return new NullMessage();
    }
}
