<?php

namespace ClickBlocks\DB;

/**
 * 
 */
class ServiceFactory
{
   /**
    * При вызове ServiceFactory::$method($params) пытается вернуть объект класса
    * 
    *
    * @param string $method
    * @param array $params
    * @return \ClickBlocks\DB\class
    * @throws \BadMethodCallException 
    * @access public
    * @static
    */
   public static function __callStatic($method, $params)
   {
      if (strtolower(substr($method, 0, 3)) == 'get')
      {
         $info = ORM::getInstance()->getORMInfo();
         $class = (($info['namespace'] != '\\') ? $info['namespace'] : '') . '\\' . substr($method, 3);
         return new $class();
      }
      throw new \BadMethodCallException('Static method "' . $method . '" does not exist in the "ServiceFactory".');        
   }
}

?>