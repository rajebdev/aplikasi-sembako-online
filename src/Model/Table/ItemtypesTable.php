<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Itemtypes Model
 *
 * @property \App\Model\Table\ItemsTable&\Cake\ORM\Association\HasMany $Items
 *
 * @method \App\Model\Entity\Itemtype get($primaryKey, $options = [])
 * @method \App\Model\Entity\Itemtype newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Itemtype[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Itemtype|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Itemtype saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Itemtype patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Itemtype[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Itemtype findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ItemtypesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('itemtypes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Items', [
            'foreignKey' => 'itemtype_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('information')
            ->requirePresence('information', 'create')
            ->notEmptyString('information');

        return $validator;
    }
}
