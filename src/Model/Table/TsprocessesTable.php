<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tsprocesses Model
 *
 * @property \App\Model\Table\TransactionstatusTable&\Cake\ORM\Association\HasMany $Transactionstatus
 *
 * @method \App\Model\Entity\Tsprocess get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tsprocess newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tsprocess[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tsprocess|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tsprocess saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tsprocess patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tsprocess[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tsprocess findOrCreate($search, callable $callback = null, $options = [])
 */
class TsprocessesTable extends Table
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

        $this->setTable('tsprocesses');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Transactionstatus', [
            'foreignKey' => 'tsprocess_id',
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
