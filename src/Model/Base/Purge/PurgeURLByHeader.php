<?php

declare(strict_types=1);

namespace ToshY\BunnyNet\Model\Base\Purge;

use ToshY\BunnyNet\Enum\Method;
use ToshY\BunnyNet\Enum\Type;
use ToshY\BunnyNet\Model\AbstractParameter;
use ToshY\BunnyNet\Model\EndpointInterface;

class PurgeURLByHeader implements EndpointInterface
{
    public function getMethod(): Method
    {
        return Method::GET;
    }

    public function getPath(): string
    {
        return 'purge';
    }

    public function getHeaders(): array
    {
        return [];
    }

    public function getQuery(): array
    {
        return [
            new AbstractParameter(name: 'url', type: Type::STRING_TYPE, required: true),
            new AbstractParameter(name: 'headerName', type: Type::STRING_TYPE),
            new AbstractParameter(name: 'headerValue', type: Type::STRING_TYPE),
            new AbstractParameter(name: 'async', type: Type::BOOLEAN_TYPE),
        ];
    }
}
