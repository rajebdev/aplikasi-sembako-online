<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tsreceives Model
 *
 * @method \App\Model\Entity\Tsreceife get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tsreceife newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tsreceife[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tsreceife|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tsreceife saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tsreceife patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tsreceife[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tsreceife findOrCreate($search, callable $callback = null, $options = [])
 */
class TsreceivesTable extends Table
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

        $this->setTable('tsreceives');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->dateTime('date_status')
            ->requirePresence('date_status', 'create')
            ->notEmptyDateTime('date_status');

        return $validator;
    }
}
