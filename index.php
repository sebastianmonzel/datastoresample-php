<?php

require 'vendor/autoload.php';

use simpleserv\webfilesframework\core\datastore\types\directory\MDirectoryDatastore;
use simpleserv\webfilesframework\core\datastore\types\remote\MRemoteDatastoreEndpoint;
use simpleserv\webfilesframework\core\datasystem\file\system\MDirectory;


$directory = new MDirectory("./datastore");
$datastore = new MDirectoryDatastore($directory);

$endpoint = new MRemoteDatastoreEndpoint($datastore);
$endpoint->handleRemoteCall();

