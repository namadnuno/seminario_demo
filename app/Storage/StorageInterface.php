<?php

namespace Acme\Controllers;

interface StorageInterface {
    
    /**
     * Get content from file
     *
     * @param String $fileName
     * @return void
     */
    public function get($fileName);

    /**
     * Saves contents on file
     *
     * @param String $fileName
     * @param String $data
     * @return void
     */
    public function save($fileName, $data);
}