<?php
namespace kadev\DDD\interfaces;

/**
 *  Implement Entity concept of domain driven design
 * 
 *  @author Kadevland
 * 
 * @package kadev\DDD\interfaces
 */
interface Entity
{
 
    /**
     * Returns the property identity of the Entity
     * 
     *  
     * @return mixed 
     */
    public function identity();

    /**
     * Checks whether the Entity represented by this object equals to another Entity.
     * @param Entity $entity 
     * @return bool 
     */
    public function equals(Entity $other):bool;
}
