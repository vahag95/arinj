<?php

namespace App\Http;

use Aws\S3\S3Client;
use Config;

class AmazonApi
{
	public function __construct()
	{
		
		$this->s3 = S3Client::factory(
			[
				'region' => 'us-west-2',
				'credentials' => array(
				    'key' => Config::get('filesystems.disks.s3.key'),
				    'secret'  => Config::get('filesystems.disks.s3.secret'),
			    ),
				'version'=> 'latest'
			]
		);
		
		$this->bucket = Config::get('filesystems.disks.s3.bucket');
	}

	/**
	 * Store file to aws bucket.
	 *
	 * 
	 */
	public function store( $key , $path , $bucket = null )
	{
		return $this->s3->putObject(
				[
					'Bucket' => $bucket?$bucket:$this->bucket,
					'Key'    => $key,
					'Body'   => fopen($path , 'rb'),
					'ACL'    => 'public-read',
				]
		);
	}

	/**
	 * Get file url from aws bucket.
	 *
	 * @return string
	 */
	public function get( $key , $bucket = null )
	{
		return $this->s3->getObjectUrl($bucket?$bucket:$this->bucket , $key);
	}

	/**
	 * Get file url from aws bucket.
	 *
	 * @return string
	 */
	public function copy( $key , $path , $bucket = null )
	{
		return $this->s3->copyObject(
			[
				'Bucket' => $bucket?$bucket:$this->bucket,
				'Key'    => $key,
				'CopySource' => urlencode($bucket?$bucket:$this->bucket.'/'.$path),
				'ACL'    => 'public-read'
			]
		);

	}



	/**
	 * Delete file from aws bucket.
	 *
	 * @return string
	 */
	public function delete( $key , $bucket = null )
	{
		return $this->s3->deleteObject(
			[
				'Bucket' => $bucket?$bucket:$this->bucket,
				'Key' => $key
			]
		);
	}

	/**
	 * Delete file from aws bucket.
	 *
	 * 
	 */
	public function uploadDirectory($dir, $key)
	{		
		$bucket = $this->bucket;
		$key_prefix = $key;
		$options = 
		[
			'params' => array('ACL' => 'public-read'),
			'concurrency' => 20,
			'debug'       => true
		];
		$this->s3->uploadDirectory($dir, $bucket, $key_prefix, $options);
	}

	public function deleteDirectory($prefix)
	{
		$this->s3->deleteMatchingObjects($this->bucket, $prefix, []);
	}
}