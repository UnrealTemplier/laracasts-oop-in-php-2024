<?php

namespace App;

use Aws\S3\S3Client;
use Exception;

class Storage
{
    /**
     * @throws Exception
     */
    public static function resolve(): FileStorage
    {
        if ($_ENV['FILE_STORAGE'] === 'local') {
            return new LocalStorage();
        } else {
            if ($_ENV['FILE_STORAGE'] === 's3') {
                $client = new S3Client([
                    'version' => 'latest',
                    'region' => 'us-west-2',
                    'credentials' => [
                        'key' => $_ENV['S3_KEY'],
                        'secret' => $_ENV['S3_SECRET'],
                    ],
                ]);

                return new S3Storage($client);
            }
        }

        throw new Exception('$_ENV[\'FILE_STORAGE\'] value is not valid.' . PHP_EOL);
    }
}