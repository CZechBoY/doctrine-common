<?php
class Doctrine_Resource_Client extends Doctrine_Resource
{
    public $config = array();
    
    public function __construct($config)
    {
        $this->config = $config;
    }
    
    public function newQuery()
    {
        return new Doctrine_Resource_Query($this->config);
    }
    
    public function newRecord($model)
    {
        $record = new Doctrine_Resource_Record($model, $this->config);
        
        return $record;
    }
}