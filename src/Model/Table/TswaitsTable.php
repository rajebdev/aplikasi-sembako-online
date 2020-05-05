<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tswaits Model
 *
 * @property \App\Model\Table\TransactionstatusTable&\Cake\ORM\Association\HasMany $Transactionstatus
 *
 * @method \App\Model\Entity\Tswait get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tswait newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tswait[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tswait|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tswait saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tswait patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tswait[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tswait findOrCreate($search, callable $callback = null, $options = [])
 */
class TswaitsTable extends Table
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

        $this->setTable('tswaits');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Transactionstatus', [
            'foreignKey' => 'tswait_id',
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
