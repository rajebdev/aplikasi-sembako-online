<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tspaids Model
 *
 * @property \App\Model\Table\TransactionstatusTable&\Cake\ORM\Association\HasMany $Transactionstatus
 *
 * @method \App\Model\Entity\Tspaid get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tspaid newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tspaid[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tspaid|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tspaid saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tspaid patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tspaid[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tspaid findOrCreate($search, callable $callback = null, $options = [])
 */
class TspaidsTable extends Table
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

        $this->setTable('tspaids');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Transactionstatus', [
            'foreignKey' => 'tspaid_id',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->dateTime('date_status')
            ->requirePresence('date_status', 'create')
            ->notEmptyDateTime('date_status');

        return $validator;
    }
}
