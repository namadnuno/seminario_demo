<?php 

namespace Acme\Storage;

class Storage 
{
    /**
     * Get content from file
     *
     * @param String $fileName
     * @return void
     */
    public function get($fileName) 
    {
        return file_get_contents(__DIR__ ."/../Storage/files/". $fileName);
    }

    /**
     * Saves contents on file
     *
     * @param String $fileName
     * @param String $data
     * @return void
     */
    public function save($fileName, $data) 
    {
        return file_put_contents(__DIR__ ."/../Storage/files/". $fileName, $data);
    }
}
