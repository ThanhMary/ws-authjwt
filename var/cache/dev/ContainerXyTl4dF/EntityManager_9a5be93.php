<?php

namespace ContainerXyTl4dF;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7d012 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer17fa7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9df66 = [
        
    ];

    public function getConnection()
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'getConnection', array(), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'getMetadataFactory', array(), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'getExpressionBuilder', array(), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'beginTransaction', array(), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'getCache', array(), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->getCache();
    }

    public function transactional($func)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'transactional', array('func' => $func), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'wrapInTransaction', array('func' => $func), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'commit', array(), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->commit();
    }

    public function rollback()
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'rollback', array(), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'getClassMetadata', array('className' => $className), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'createQuery', array('dql' => $dql), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'createNamedQuery', array('name' => $name), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'createQueryBuilder', array(), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'flush', array('entity' => $entity), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'clear', array('entityName' => $entityName), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->clear($entityName);
    }

    public function close()
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'close', array(), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->close();
    }

    public function persist($entity)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'persist', array('entity' => $entity), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'remove', array('entity' => $entity), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'refresh', array('entity' => $entity), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'detach', array('entity' => $entity), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'merge', array('entity' => $entity), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'getRepository', array('entityName' => $entityName), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'contains', array('entity' => $entity), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'getEventManager', array(), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'getConfiguration', array(), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'isOpen', array(), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'getUnitOfWork', array(), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'getProxyFactory', array(), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'initializeObject', array('obj' => $obj), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'getFilters', array(), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'isFiltersStateClean', array(), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'hasFilters', array(), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return $this->valueHolder7d012->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer17fa7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7d012) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7d012 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7d012->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, '__get', ['name' => $name], $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        if (isset(self::$publicProperties9df66[$name])) {
            return $this->valueHolder7d012->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d012;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7d012;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d012;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7d012;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, '__isset', array('name' => $name), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d012;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7d012;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, '__unset', array('name' => $name), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d012;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7d012;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, '__clone', array(), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        $this->valueHolder7d012 = clone $this->valueHolder7d012;
    }

    public function __sleep()
    {
        $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, '__sleep', array(), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;

        return array('valueHolder7d012');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer17fa7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer17fa7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer17fa7 && ($this->initializer17fa7->__invoke($valueHolder7d012, $this, 'initializeProxy', array(), $this->initializer17fa7) || 1) && $this->valueHolder7d012 = $valueHolder7d012;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7d012;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7d012;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
