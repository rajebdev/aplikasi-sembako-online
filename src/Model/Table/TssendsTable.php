<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tssends Model
 *
 * @property \App\Model\Table\TransactionstatusTable&\Cake\ORM\Association\HasMany $Transactionstatus
 *
 * @method \App\Model\Entity\Tssend get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tssend newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tssend[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tssend|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tssend saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tssend patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tssend[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tssend findOrCreate($search, callable $callback = null, $options = [])
 */
class TssendsTable extends Table
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

        $this->setTable('tssends');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Transactionstatus', [
            'foreignKey' => 'tssend_id',
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
