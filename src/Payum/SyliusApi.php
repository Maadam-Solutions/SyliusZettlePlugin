<?php

declare(strict_types=1);

namespace MaadamSolutions\SyliusZettlePlugin\Payum;

final class SyliusApi
{
    /** @var string */
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }
}