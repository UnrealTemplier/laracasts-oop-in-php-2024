<?php

namespace App;

use Aws\S3\S3Client;

class S3Storage implements FileStorage
{
    public function __construct(protected S3Client $client) {}

    public function put($path, $content): void
    {
        $this->client->putObject([
            'Bucket' => $_ENV['S3_BUCKET'],
            'Key' => $path,
            'Body' => $content,
        ]);
    }
}